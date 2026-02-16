<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CricketApiService
{
    protected $config;

    public function __construct()
    {
        $this->config = config('cricket');
    }

    /**
     * Get live matches with fallback support
     *
     * @return array
     */
    public function getLiveMatches()
    {
        $priority = $this->config['priority'] ?? ['cricbuzz', 'backup'];

        foreach ($priority as $provider) {
            try {
                if ($provider === 'cricbuzz') {
                    $result = $this->getCricbuzzLiveMatches();
                    if (!empty($result)) {
                        return $result;
                    }
                } elseif ($provider === 'backup') {
                    $result = $this->getBackupLiveMatches();
                    if (!empty($result)) {
                        return $result;
                    }
                }
            } catch (\Exception $e) {
                Log::warning("Cricket API [{$provider}] failed: " . $e->getMessage());
                continue;
            }
        }

        Log::error('All cricket APIs failed');
        return [];
    }

    /**
     * Get featured matches (for homepage)
     *
     * @return array
     */
    public function getFeaturedMatches()
    {
        $priority = $this->config['priority'] ?? ['cricbuzz', 'backup'];

        foreach ($priority as $provider) {
            try {
                if ($provider === 'cricbuzz') {
                    $result = $this->getCricbuzzFeaturedMatches();
                    if (!empty($result)) {
                        return $result;
                    }
                } elseif ($provider === 'backup') {
                    $result = $this->getBackupFeaturedMatches();
                    if (!empty($result)) {
                        return $result;
                    }
                }
            } catch (\Exception $e) {
                Log::warning("Cricket API [{$provider}] failed: " . $e->getMessage());
                continue;
            }
        }

        Log::error('All cricket APIs failed for featured matches');
        return [];
    }

    /**
     * Get scorecard for a specific match
     *
     * @param string $matchId
     * @return array
     */
    public function getScorecard($matchId)
    {
        $priority = $this->config['priority'] ?? ['cricbuzz', 'backup'];

        foreach ($priority as $provider) {
            try {
                if ($provider === 'cricbuzz') {
                    $result = $this->getCricbuzzScorecard($matchId);
                    if (!empty($result)) {
                        return $result;
                    }
                } elseif ($provider === 'backup') {
                    $result = $this->getBackupScorecard($matchId);
                    if (!empty($result)) {
                        return $result;
                    }
                }
            } catch (\Exception $e) {
                Log::warning("Cricket API [{$provider}] failed for scorecard: " . $e->getMessage());
                continue;
            }
        }

        Log::error("All cricket APIs failed for scorecard matchId: {$matchId}");
        return [];
    }

    /**
     * Get live matches from Cricbuzz API
     *
     * @return array
     */
    private function getCricbuzzLiveMatches()
    {
        $config = $this->config['cricbuzz'];
        $url = $config['base_url'] . $config['endpoints']['live_matches'];

        $response = Http::withHeaders([
            'X-RapidAPI-Host' => $config['host'],
            'X-RapidAPI-Key' => $config['api_key'],
        ])->timeout(30)->get($url);

        if (!$response->successful()) {
            throw new \Exception("Cricbuzz API returned status: " . $response->status());
        }

        $data = $response->json();
        return $this->mapCricbuzzLiveMatchesToFormat($data);
    }

    /**
     * Get featured matches from Cricbuzz API (uses live matches endpoint)
     *
     * @return array
     */
    private function getCricbuzzFeaturedMatches()
    {
        $matches = $this->getCricbuzzLiveMatches();
        
        // Transform to featured matches format (similar to cricket.com format)
        $featured = [];
        foreach ($matches as $match) {
            $featured[] = [
                'matchID' => $match['match_id'] ?? null,
                'matchType' => $match['type'] ?? null,
                'seriesName' => $match['match_type'] ?? null,
                'matchStatus' => $match['is_live'] ?? null,
                'statusMessage' => $match['result'] ?? null,
                'venue' => $match['match_location'] ?? null,
                'matchScore' => $match['team_details'] ?? null,
            ];
        }
        
        // Return in the format expected by the controller (nested structure)
        return ['data' => ['featurematch' => $featured]];
    }

    /**
     * Get scorecard from Cricbuzz API
     *
     * @param string $matchId
     * @return array
     */
    private function getCricbuzzScorecard($matchId)
    {
        $config = $this->config['cricbuzz'];
        $endpoint = str_replace('{matchId}', $matchId, $config['endpoints']['scorecard']);
        $url = $config['base_url'] . $endpoint;

        $response = Http::withHeaders([
            'X-RapidAPI-Host' => $config['host'],
            'X-RapidAPI-Key' => $config['api_key'],
        ])->timeout(30)->get($url);

        if (!$response->successful()) {
            throw new \Exception("Cricbuzz API returned status: " . $response->status());
        }

        $data = $response->json();
        return $this->mapCricbuzzScorecardToFormat($data);
    }

    /**
     * Map Cricbuzz live matches response to our format
     *
     * @param array $data
     * @return array
     */
    private function mapCricbuzzLiveMatchesToFormat($data)
    {
        $matches = [];
        
        if (!isset($data['typeMatches'])) {
            return $matches;
        }

        foreach ($data['typeMatches'] as $typeMatch) {
            if (!isset($typeMatch['seriesMatches'])) {
                continue;
            }

            foreach ($typeMatch['seriesMatches'] as $seriesMatch) {
                if (!isset($seriesMatch['seriesAdWrapper']['matches'])) {
                    continue;
                }

                foreach ($seriesMatch['seriesAdWrapper']['matches'] as $match) {
                    $matchInfo = $match['matchInfo'] ?? [];
                    $matchScore = $match['matchScore'] ?? [];

                    // Skip Test matches
                    if (($matchInfo['matchFormat'] ?? '') === 'TEST') {
                        continue;
                    }

                    // Map to Live model format
                    $mappedMatch = [
                        'match_id' => $matchInfo['matchId'] ?? null,
                        'type' => $matchInfo['matchFormat'] ?? null,
                        'match_type' => $matchInfo['seriesName'] ?? null,
                        'is_live' => $this->mapMatchStatus($matchInfo['state'] ?? ''),
                        'result' => $matchInfo['status'] ?? '',
                        'match_location' => $matchInfo['venueInfo']['ground'] ?? '' . ', ' . ($matchInfo['venueInfo']['city'] ?? ''),
                        'team_details' => $this->mapCricbuzzMatchScore($matchScore, $matchInfo),
                    ];

                    $matches[] = $mappedMatch;
                }
            }
        }

        return $matches;
    }

    /**
     * Map Cricbuzz match score to our format
     *
     * @param array $matchScore
     * @param array $matchInfo
     * @return array
     */
    private function mapCricbuzzMatchScore($matchScore, $matchInfo)
    {
        $team1 = $matchInfo['team1'] ?? [];
        $team2 = $matchInfo['team2'] ?? [];
        $team1Score = $matchScore['team1Score'] ?? [];
        $team2Score = $matchScore['team2Score'] ?? [];

        // Get latest innings for each team
        $team1Innings = $this->getLatestInnings($team1Score);
        $team2Innings = $this->getLatestInnings($team2Score);

        return [
            [
                'teamID' => $team1['teamId'] ?? null,
                'teamFullName' => $team1['teamName'] ?? '',
                'teamShortName' => $team1['teamSName'] ?? '',
                'teamScore' => [
                    [
                        'runsScored' => $team1Innings['runs'] ?? 0,
                        'wickets' => $team1Innings['wickets'] ?? 0,
                        'overs' => $team1Innings['overs'] ?? 0,
                    ]
                ]
            ],
            [
                'teamID' => $team2['teamId'] ?? null,
                'teamFullName' => $team2['teamName'] ?? '',
                'teamShortName' => $team2['teamSName'] ?? '',
                'teamScore' => [
                    [
                        'runsScored' => $team2Innings['runs'] ?? 0,
                        'wickets' => $team2Innings['wickets'] ?? 0,
                        'overs' => $team2Innings['overs'] ?? 0,
                    ]
                ]
            ]
        ];
    }

    /**
     * Get latest innings from team score
     *
     * @param array $teamScore
     * @return array
     */
    private function getLatestInnings($teamScore)
    {
        $latest = ['runs' => 0, 'wickets' => 0, 'overs' => 0];
        
        foreach ($teamScore as $key => $innings) {
            if (strpos($key, 'inngs') !== false && is_array($innings)) {
                $latest = $innings;
            }
        }
        
        return $latest;
    }

    /**
     * Map match status
     *
     * @param string $state
     * @return string
     */
    private function mapMatchStatus($state)
    {
        $statusMap = [
            'In Progress' => 'live',
            'Complete' => 'completed',
            'Stumps' => 'live',
        ];

        return $statusMap[$state] ?? 'upcoming';
    }

    /**
     * Map Cricbuzz scorecard response to our format
     *
     * @param array $data
     * @return array
     */
    private function mapCricbuzzScorecardToFormat($data)
    {
        if (!isset($data['scorecard']) || !is_array($data['scorecard'])) {
            return ['data' => ['getScoreCard' => ['fullScoreCard' => []]]];
        }

        $fullScoreCard = [];

        foreach ($data['scorecard'] as $innings) {
            $battingTeamName = $innings['batteamname'] ?? '';
            $battingTeamShortName = $innings['batteamsname'] ?? '';
            
            // Get team ID from batting team name (you may need to adjust this)
            $battingTeamID = $this->getTeamIdFromName($battingTeamName);

            // Map batting data
            $batting = [];
            foreach ($innings['batsman'] ?? [] as $batsman) {
                $batting[] = [
                    'playerID' => $batsman['id'] ?? null,
                    'playerName' => $batsman['name'] ?? '',
                    'playerTeam' => $battingTeamID,
                    'playerMatchRuns' => $batsman['runs'] ?? 0,
                    'playerMatchBalls' => $batsman['balls'] ?? 0,
                    'playerMatchFours' => $batsman['fours'] ?? 0,
                    'playerMatchSixes' => $batsman['sixes'] ?? 0,
                    'playerMatchStrikeRate' => $batsman['strkrate'] ?? '0',
                    'playerDismissalInfo' => $batsman['outdec'] ?? '',
                    'playerHowOut' => $batsman['outdec'] ?? '',
                    'isCaptain' => $batsman['iscaptain'] ?? false,
                    'iskeeper' => $batsman['iskeeper'] ?? false,
                    'isNotOut' => ($batsman['outdec'] ?? '') === 'not out',
                ];
            }

            // Map bowling data
            $bowling = [];
            foreach ($innings['bowler'] ?? [] as $bowler) {
                $bowling[] = [
                    'playerID' => $bowler['id'] ?? null,
                    'playerName' => $bowler['name'] ?? '',
                    'playerTeam' => $battingTeamID, // Opposing team
                    'playerOversBowled' => $bowler['overs'] ?? '0',
                    'playerRunsConceeded' => $bowler['runs'] ?? 0,
                    'playerWicketsTaken' => $bowler['wickets'] ?? 0,
                    'playerMaidensBowled' => $bowler['maidens'] ?? 0,
                    'playerEconomyRate' => $bowler['economy'] ?? '0',
                    'playerDotBalls' => $bowler['dots'] ?? 0,
                    'playerWides' => 0, // Not in Cricbuzz response
                    'playerNoBall' => 0, // Not in Cricbuzz response
                ];
            }

            // Map extras
            $extras = $innings['extras'] ?? [];
            $mappedExtras = [
                'byes' => $extras['byes'] ?? 0,
                'legByes' => $extras['legbyes'] ?? 0,
                'wides' => $extras['wides'] ?? 0,
                'noBalls' => $extras['noballs'] ?? 0,
                'penalties' => $extras['penalty'] ?? 0,
                'totalExtras' => $extras['total'] ?? 0,
            ];

            // Map FOW (Fall of Wickets)
            $fow = [];
            if (isset($innings['fow']['fow']) && is_array($innings['fow']['fow'])) {
                foreach ($innings['fow']['fow'] as $wicket) {
                $fow[] = [
                    'playerID' => $wicket['batsmanid'] ?? null,
                    'playerName' => $wicket['batsmanname'] ?? '',
                    'runs' => $wicket['runs'] ?? 0,
                    'over_ball' => $wicket['overnbr'] ?? 0,
                    'order' => count($fow) + 1,
                ];
                }
            }

            // Map next batsmen (not directly available in Cricbuzz, create empty)
            $nextBatsmans = [];

            // Map run rate projection (not in Cricbuzz, create empty)
            $runRateProjection = [];

            $fullScoreCard[] = [
                'battingTeamID' => $battingTeamID,
                'battingTeamName' => $battingTeamName,
                'battingTeamShortName' => $battingTeamShortName,
                'runsScored' => $innings['score'] ?? 0,
                'wickets' => $innings['wickets'] ?? 0,
                'overs' => $innings['overs'] ?? 0,
                'runRate' => $innings['runrate'] ?? '0',
                'runRateProjection' => $runRateProjection,
                'nextBatsmans' => $nextBatsmans,
                'batting' => $batting,
                'bowling' => $bowling,
                'extras' => $mappedExtras,
                'fow' => $fow,
                'total' => [
                    'runsScored' => $innings['score'] ?? 0,
                    'wickets' => $innings['wickets'] ?? 0,
                    'overs' => $innings['overs'] ?? 0,
                    'runRate' => $innings['runrate'] ?? '0',
                ],
            ];
        }

        return ['data' => ['getScoreCard' => ['fullScoreCard' => $fullScoreCard]]];
    }

    /**
     * Get team ID from team name (placeholder - you may need to create a mapping)
     *
     * @param string $teamName
     * @return int
     */
    private function getTeamIdFromName($teamName)
    {
        // This is a placeholder - you may want to create a proper team mapping
        // For now, return a hash of the team name
        return abs(crc32($teamName));
    }

    // ==================== CRICKETDATA API (BACKUP) ====================

    /**
     * Get live matches from CricketData API
     *
     * @return array
     */
    private function getBackupLiveMatches()
    {
        $config = $this->config['backup'];
        $url = $config['base_url'] . $config['endpoints']['live_matches'];

        $response = Http::timeout(30)->get($url, [
            'apikey' => $config['api_key'],
            'offset' => 0,
        ]);

        if (!$response->successful()) {
            throw new \Exception("CricketData API returned status: " . $response->status());
        }

        $data = $response->json();
        
        if (!isset($data['status']) || $data['status'] !== 'success' || !isset($data['data'])) {
            throw new \Exception("CricketData API returned invalid response");
        }

        return $this->mapCricketDataLiveMatchesToFormat($data['data']);
    }

    /**
     * Get featured matches from CricketData API
     *
     * @return array
     */
    private function getBackupFeaturedMatches()
    {
        $matches = $this->getBackupLiveMatches();
        
        // Transform to featured matches format
        $featured = [];
        foreach ($matches as $match) {
            $featured[] = [
                'matchID' => $match['match_id'] ?? null,
                'matchType' => $match['type'] ?? null,
                'seriesName' => $match['match_type'] ?? null,
                'matchStatus' => $match['is_live'] ?? null,
                'statusMessage' => $match['result'] ?? null,
                'venue' => $match['match_location'] ?? null,
                'matchScore' => $match['team_details'] ?? null,
            ];
        }
        
        // Return in the format expected by the controller (nested structure)
        return ['data' => ['featurematch' => $featured]];
    }

    /**
     * Get scorecard from CricketData API
     *
     * @param string $matchId
     * @return array
     */
    private function getBackupScorecard($matchId)
    {
        $config = $this->config['backup'];
        $url = $config['base_url'] . $config['endpoints']['scorecard'];

        $response = Http::timeout(30)->get($url, [
            'apikey' => $config['api_key'],
            'id' => $matchId,
        ]);

        if (!$response->successful()) {
            throw new \Exception("CricketData API returned status: " . $response->status());
        }

        $data = $response->json();
        
        if (!isset($data['status']) || $data['status'] !== 'success' || !isset($data['data'])) {
            throw new \Exception("CricketData API returned invalid response");
        }

        return $this->mapCricketDataScorecardToFormat($data['data']);
    }

    /**
     * Map CricketData live matches response to our format
     *
     * @param array $data
     * @return array
     */
    private function mapCricketDataLiveMatchesToFormat($data)
    {
        $matches = [];
        
        if (!is_array($data)) {
            return $matches;
        }

        foreach ($data as $match) {
            // Skip Test matches
            if (($match['matchType'] ?? '') === 'test') {
                continue;
            }

            $teamInfo = $match['teamInfo'] ?? [];
            $score = $match['score'] ?? [];
            
            // Map team details
            $teamDetails = [];
            foreach ($teamInfo as $index => $team) {
                $teamScore = $score[$index] ?? null;
                $teamDetails[] = [
                    'teamID' => null, // CricketData doesn't provide team IDs
                    'teamFullName' => $team['name'] ?? '',
                    'teamShortName' => $team['shortname'] ?? '',
                    'teamScore' => $teamScore ? [[
                        'runsScored' => $teamScore['r'] ?? 0,
                        'wickets' => $teamScore['w'] ?? 0,
                        'overs' => $teamScore['o'] ?? 0,
                    ]] : [],
                ];
            }

            // Determine match status
            $status = $match['status'] ?? '';
            $isLive = 'live';
            if ($match['matchEnded'] ?? false) {
                $isLive = 'completed';
            } elseif (!($match['matchStarted'] ?? false)) {
                $isLive = 'upcoming';
            }

            // Map to Live model format
            $mappedMatch = [
                'match_id' => $match['id'] ?? null,
                'type' => strtoupper($match['matchType'] ?? ''),
                'match_type' => $this->extractSeriesName($match['name'] ?? ''),
                'is_live' => $isLive,
                'result' => $status,
                'match_location' => $match['venue'] ?? '',
                'team_details' => $teamDetails,
            ];

            $matches[] = $mappedMatch;
        }

        return $matches;
    }

    /**
     * Map CricketData scorecard response to our format
     *
     * @param array $data
     * @return array
     */
    private function mapCricketDataScorecardToFormat($data)
    {
        // CricketData API provides basic score data only
        // We'll create a minimal scorecard structure
        $fullScoreCard = [];
        
        $score = $data['score'] ?? [];
        $teamInfo = $data['teamInfo'] ?? [];
        
        foreach ($score as $index => $innings) {
            $team = $teamInfo[$index] ?? null;
            
            if (!$team) {
                continue;
            }

            $inningName = $innings['inning'] ?? '';
            $battingTeamName = $this->extractTeamNameFromInning($inningName);
            
            // Create basic scorecard entry
            $fullScoreCard[] = [
                'battingTeamID' => null,
                'battingTeamName' => $battingTeamName,
                'battingTeamShortName' => $team['shortname'] ?? '',
                'runsScored' => $innings['r'] ?? 0,
                'wickets' => $innings['w'] ?? 0,
                'overs' => $innings['o'] ?? 0,
                'runRate' => $this->calculateRunRate($innings['r'] ?? 0, $innings['o'] ?? 0),
                'runRateProjection' => [],
                'nextBatsmans' => [],
                'batting' => [], // CricketData doesn't provide individual batsmen data
                'bowling' => [], // CricketData doesn't provide individual bowler data
                'extras' => [
                    'byes' => 0,
                    'legByes' => 0,
                    'wides' => 0,
                    'noBalls' => 0,
                    'penalties' => 0,
                    'totalExtras' => 0,
                ],
                'fow' => [], // CricketData doesn't provide fall of wickets
                'total' => [
                    'runsScored' => $innings['r'] ?? 0,
                    'wickets' => $innings['w'] ?? 0,
                    'overs' => $innings['o'] ?? 0,
                    'runRate' => $this->calculateRunRate($innings['r'] ?? 0, $innings['o'] ?? 0),
                ],
            ];
        }

        return ['data' => ['getScoreCard' => ['fullScoreCard' => $fullScoreCard]]];
    }

    /**
     * Extract series name from match name
     *
     * @param string $matchName
     * @return string
     */
    private function extractSeriesName($matchName)
    {
        // Match name format: "Team1 vs Team2, Match Number, Series Name"
        // Try to extract series name after the comma
        $parts = explode(',', $matchName);
        if (count($parts) >= 3) {
            return trim($parts[2]);
        } elseif (count($parts) >= 2) {
            return trim($parts[1]);
        }
        return '';
    }

    /**
     * Extract team name from inning string
     *
     * @param string $inning
     * @return string
     */
    private function extractTeamNameFromInning($inning)
    {
        // Inning format: "Team Name Inning 1"
        $parts = explode(' Inning', $inning);
        return trim($parts[0] ?? '');
    }

    /**
     * Calculate run rate from runs and overs
     *
     * @param int $runs
     * @param float $overs
     * @return string
     */
    private function calculateRunRate($runs, $overs)
    {
        if ($overs <= 0) {
            return '0.00';
        }
        return number_format($runs / $overs, 2);
    }
}

