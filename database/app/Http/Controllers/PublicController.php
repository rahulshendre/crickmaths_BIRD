<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Challenge_question;
use App\Models\challenge_question_option;
use App\Models\Answer;
use App\Models\Question_category;
use App\Models\Question;
use App\Models\User;
use App\Models\Score;
use App\Models\Live;
use App\Models\Team;
use App\Models\Livematch;
use App\Models\Contact;
use App\Models\Student;
use Goutte\Client;
use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use session;
class PublicController extends Controller
{

public function localone(){
    return view('localone');
}


    public function getProfile(){


    $user_id = Auth()->id();
    $userDetails=User::where('id',$user_id)->with('answer')->get();
    $reportTable=Answer::where('user_id',$user_id)->get();
  $std_score=Student::where('teacher_id',$user_id)->orderBy('score','desc')->get();

$attemptTotals = [];
$new_user_id = auth()->id();
foreach ($reportTable as $answer) {
    $attemptNumber = $answer->test;
    $score = $answer->correct;
    $question = $answer->question_id;
    $new_category=$answer->category;
   
    // Check if the user or category has changed
    if ($user_id != $new_user_id ) {
        $user_id = $new_user_id;
        $attempt['categoryId'] = $new_category;
        $attemptTotals = []; // Reset attemptTotals for the new user and category
    }

    if (!isset($attemptTotals[$attemptNumber])) {
        $attemptTotals[$attemptNumber] = [
            'category' => $new_category,
            'totalScore' => 0,
            'questionCount' => 0,
        ];
    }

    $attemptTotals[$attemptNumber]['totalScore'] += $score;
    $attemptTotals[$attemptNumber]['questionCount']++;
}

$tableData = [];
foreach ($attemptTotals as $attemptNumber => $data) {
    $tableData[] = [
         'Category' => $data['category'],
        'Attempt' => $attemptNumber,
        'Total_Score' => $data['totalScore'],
        'Question_Count' => $data['questionCount'],
    ];
}


      return view('profile')->with('userdetail',$userDetails)->with('tableData', $tableData)->with('std_score',$std_score);
    }
 public function saveAttempts(Request $request)
    {
        $user=Auth::user();

        $user_id=$user->id;
     $test_attempt=$user->test_attempt;

            // try {
            $data = $request->json()->all();
$data = $request->all();

 $attempt=User::find($user_id);
 $attempt->test_attempt=$test_attempt+1;
 $attempt->update();

$userAttempts = json_decode($request->input('userAttempts'), true);

       $test_given=Answer::where('user_id',$user_id)->orderBy('created_at', 'desc')->first();
$tests = empty($test_given->test) || $test_given->test == "" ? 1 : $test_given->test+1;


foreach($userAttempts as $attempt){

//  foreach($test_given as $test){
// $tests=$test->test;
//  }

    $ans=new Answer();
        $ans->answer=$attempt['correctAnswer'];
    $ans->category=$attempt['categoryId'];
    $ans->question_id=$attempt['questionId'];
    $ans->correct=$attempt['isCorrect'];
    $ans->option_id=$attempt['selectedValue'];
    $ans->user_id=$user_id;
    $ans->test=$tests;
    $ans->save();

};

return [
    'tableData' => $userAttempts,
]; // } catch (\Exception $e) {
        //     // Handle exceptions if any
        //     Log::error('Error saving user attempts: ' . $e->getMessage());

        //     return response()->json(['error' => 'Failed to save user attempts'], 500);
        // }
    }
public function postScore(Request $req){
  $user=Auth::user();
  $user_id=$user->id;
  $score=new Score();
  $score->total_correct=$req->correct;
  $score->total_question=$req->noQuestion;
  $score->category=$req->categoryId;
  $score->user_id=$user_id;
  $score->save();


$reportTable=Answer::where('user_id',$user_id)->where('category',$req->categoryId)->get();
$attemptTotals = [];
$new_user_id = auth()->id();
foreach ($reportTable as $answer) {
    $attemptNumber = $answer->test;
    $score = $answer->correct;
    $question = $answer->question_id;
    $new_category=$answer->category;

    // Check if the user or category has changed
    if ($user_id != $new_user_id || $req->categoryId!= $new_category) {
        $user_id = $new_user_id;
        $attempt['categoryId'] = $new_category;
        $attemptTotals = []; // Reset attemptTotals for the new user and category
    }

    if (!isset($attemptTotals[$attemptNumber])) {
        $attemptTotals[$attemptNumber] = [
            'totalScore' => 0,
            'questionCount' => 0,
        ];
    }

    $attemptTotals[$attemptNumber]['totalScore'] += $score;
    $attemptTotals[$attemptNumber]['questionCount']++;
}

$tableData = [];
foreach ($attemptTotals as $attemptNumber => $data) {
    $tableData[] = [
        'Attempt' => $attemptNumber,
        'Total_Score' => $data['totalScore'],
        'Question_Count' => $data['questionCount'],
    ];
}

return  $tableData; // } catch (\Exception $e) {
}   
    
public function getRegistration(){
    return view('registration');
}
    public function getAnswer(Request $req){
$matchID=$req->selectedValue;
$curl = curl_init();

$data = ' {"query":"\n  query getScoreCard($matchID: String!) {\n    getScoreCard(matchID: $matchID) {\n      fullScoreCard {\n        Substitutes {\n          playerInID\n          playerInName\n          teamID\n          playerOutID\n          playerOutName\n        }\n        impactPlayer\n        battingTeamName\n        battingTeamShortName\n        battingTeamID\n        runsScored\n        wickets\n        overs\n        runRate\n        runRateProjection {\n          rr\n          oversRemaining\n          runs\n        }\n        nextBatsmans {\n          playerID\n          playerName\n          playerTeam\n          playerMatchSixes\n          playerMatchFours\n          playerMatchBalls\n          playerMatchRuns\n          playerBattingNumber\n          playerMatchStrikeRate\n          playerMatchAvg\n          isNotOut\n          zad {\n            runs\n            zadval\n          }\n        }\n        batting {\n          matchID\n          playerID\n          playerName\n          playerTeam\n          playerMatchSixes\n          playerMatchFours\n          playerMatchBalls\n          playerMatchRuns\n          playerBattingNumber\n          playerDismissalInfo\n          playerHowOut\n          playerMatchStrikeRate\n          isCaptain\n          isKeeper\n          battingStyle\n          playingStatus\n          isSubstitutePlayer\n          battingStyle\n          zad {\n            runs\n            zadval\n          }\n        }\n        bowling {\n          matchID\n          playerID\n          playerName\n          playerTeam\n          playerDotBalls\n          playerWicketsTaken\n          playerMaidensBowled\n          playerRunsConceeded\n          playerWides\n          playerNoBall\n          playerOversBowled\n          playerEconomyRate\n          isCaptain\n          playingStatus\n          isSubstitutePlayer\n        }\n        extras {\n          byes\n          legByes\n          noBalls\n          penalties\n          wides\n          totalExtras\n        }\n        fow {\n          playerName\n          playerID\n          order\n          over_ball\n          runs\n          isCaptain\n          isKeeper\n        }\n        total {\n          overs\n          runsScored\n          wickets\n          runRate\n        }\n      }\n    }\n  }\n","variables":{"matchID":"'.$matchID.'"},"operationName":"getScoreCard"} ';

curl_setopt_array($curl, [
    CURLOPT_URL => "https://apiv2.cricket.com/cricket",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Content-Type: plain/text",
    ],
]);

$recall = curl_exec($curl);
$finalcall = json_decode($recall, true);

$err = curl_error($curl);
curl_close($curl);
if ($err) {
    return "check your Internate connection";
 $matchLive=Live::where('match_id',$matchID)->get();

$live_id=$matchLive->live_id;
        $categoty_id=$req->category;

        $questions=Challenge_question::where('is_active',1)->where('type',$categoty_id)->with('option')->inRandomOrder()->take(1)->distinct()->get();

        $progress=Answer::where('user_id',3)->count();

        // echo $progress;die;

        return view('answer')->with('questions',$questions)->with('categoty',$categoty_id)->with('matchLive',$matchLive);
} else {
                            $matchLive=Live::where('match_id',$matchID)->get();
                             
         $live_id="";  
         $match_id="";                   
foreach($matchLive as $matchL){
$live_id=$matchL->id;
$match_id=$matchL->match_id;
$is_live=$matchL->is_live;
}
foreach ($finalcall as $team_details) {

    foreach ($team_details as $details) {

    foreach ($details as $final) {
        foreach ($final as $item) {
        
        Livematch::updateOrCreate(
            ['match_id' => $match_id,
               'battingTeamID'=> $item['battingTeamID'],     
           ],

            [
'is_live'=>$is_live,
'match_id'=>$match_id,
'battingTeamName'=> $item['battingTeamName'],
'battingTeamShortName'=> $item['battingTeamShortName'],
'battingTeamID'=> $item['battingTeamID'],
'runsScored'=> $item['runsScored'],
'wickets'=> $item['wickets'],
'overs'=> $item['overs'],
'runRate'=> $item['runRate'],
'runpateprojection'=> json_encode($item['runRateProjection']),
'nextbatsmans'=> json_encode($item['nextBatsmans']),
'batting'=> json_encode($item['batting']),
'bowling'=> json_encode($item['bowling']),
'extras'=> json_encode($item['extras']),
'fow'=> json_encode($item['fow']),
'total'=> json_encode($item['total']),
            ]
        );
    }
        }
    }
}

 $matchLive=Live::where('match_id',$matchID)->get();
$result=Livematch::where('match_id',$matchID)->get();

        $categoty_id=$req->category;

        $questions=Challenge_question::where('is_active',1)->where('type',$categoty_id)->with('option')->inRandomOrder()->take(1)->distinct()->get();

        $progress=Answer::where('user_id',3)->count();


$player="V";
        return view('answer')->with('questions',$questions)->with('categoty',$categoty_id)->with('matchLive',$matchLive)->with('match_id',$matchID)->with('player',$player);

           }

    }


 function replacePlaceholders($question, $replacements)
    {
        // Loop through each replacement
        foreach ($replacements as $placeholder => $value) {
            // Replace placeholder with value
            $question = str_replace($placeholder, $value, $question);
        }

        return $question;
    }


 public function getDynamicWords(Request $request){
$questions = Question::all();



$result=Livematch::where('match_id',$request->match_id)->get();
$resultLive=Live::where('match_id',$request->match_id)->first();

$team_details=$resultLive->team_details;

$team_d = json_decode($team_details, true);
$t_wicket=[];
$t_name = [];
$t_score=[];
$t_overs=[];
foreach ($team_d as $value) {

    // Check if 'teamScore' key exists and is not empty
    if (isset($value['teamScore']) && !empty($value['teamScore'])) {
        // Get the 'battingTeamShortName' from the first element of 'teamScore'
        $battingTeamShortName = $value['teamScore'][0]['battingTeamShortName'];
        $battingscore=isset($value['teamScore'][0]['runsScored']) ? $value['teamScore'][0]['runsScored'] : 0;
        $t_wicket1=$value['teamScore'][0]['wickets'];
       if($team_d[1]['teamScore']==[]||null){
        $t_wicket2="0";
    }
    else{
        $t_wicket2=$team_d[1]['teamScore'][0]['wickets'];
    }
    if($team_d[1]['teamScore']==[]||null){
        $battingsc="0";
    }
    else{
        $battingsc=$team_d[1]['teamScore'][0]['runsScored'];
    }


$TeamOver0=isset($value['teamScore'][0]['overs']) ? round($value['teamScore'][0]['overs']) : 0;
$TeamOver1=isset($team_d[1]['teamScore'][0]['overs']) ? round($team_d[1]['teamScore'][0]['overs']) : 0;

        // Add to the result array
        $t_name[] = $battingTeamShortName;
     $t_wicket[]=$t_wicket1;
     $t_wicket[]=$t_wicket2;
        $t_score[] = $battingscore;
        $t_score[] = $battingsc;
        $t_overs[] = strval($TeamOver0);
        $t_overs[] = strval($TeamOver1);
    }
}

$battingTeamShor=$team_d[1]['teamShortName'];
 $t_name[] = $battingTeamShor;

$team_a=count($t_name);

$playerNames="[]";
$bowler='[]';
$batsmanold=[];
 $bollers=[];
$extra=[];
foreach($result as $results){
  
      $batsmanold[]=json_decode($results->batting,true);
    $bollers[]=json_decode($results->bowling,true);
    $extra[]=json_decode($results->extras,true); 
}

// Merging the arrays
$finalcall = [];

// Iterate over each array
foreach($batsmanold as $badArray) {
    // Iterate over each sub-array
    foreach ($badArray as $subArray) {
        // Append each sub-array to the merged array
        if($subArray['playerMatchRuns']!== "0" && $subArray['playerMatchRuns']!=null && !empty($subArray['playerMatchRuns'])){
               $finalcall[] = $subArray;
        }
    }
}

$bollersCalls=[];

foreach($bollers as $bollArray) {

    foreach ($bollArray as $subBallArray) {  
      
     if($subBallArray['playerWicketsTaken']!== "0" && $subBallArray['playerWicketsTaken']!=null && !empty($subBallArray['playerWicketsTaken'])){

               $bollersCalls[] = $subBallArray;
        }

    }
}



$kwwp=[];
// foreach ($batsmanold as $keyKeep) {
//    $kwwp = json_decode($keyKeep, true);
// }
$extras=[];
foreach ($extra as $key => $valueExtra) {
 $extras=$valueExtra;
}



// $bollersCalls=[];
//  foreach($bollers as $boll){
//  $bollersCalls[]=json_decode($boll, true);
// }

$keep=array_column($finalcall, 'isKeeper');
$keeperTrue="";

foreach($kwwp as $keep){
        if($keep['isKeeper']==true){
            $keeperTrue=$keep['playerName'];
        }
    }


// Extract the 'name' column values batsman
$playerMatchRuns=[];
$playerNames=[];
$playerMatchSixes=[];
$playerMatchFours=[];
$bowler=[];
$bowlerR=[];
$bowler_over=[];
$bowler_wicket=[];
$batsball=[];
  
$playerMatchRuns = array_merge($playerMatchRuns, array_column($finalcall, 'playerMatchRuns'));
$playerNames = array_merge($playerNames, array_column($finalcall, 'playerName'));
$playerMatchSixes = array_merge($playerMatchSixes, array_column($finalcall, 'playerMatchSixes'));
$playerMatchBalls = array_merge($playerMatchFours, array_column($finalcall, 'playerMatchBalls'));
$playerMatchFours = array_merge($playerMatchFours, array_column($finalcall, 'playerMatchFours'));

$bowler = array_merge($bowler, array_column($bollersCalls, 'playerName'));
$bowlerR = array_merge($bowlerR, array_column($bollersCalls, 'playerRunsConceeded'));
$bowler_over = array_merge($bowler_over, array_column($bollersCalls, 'playerOversBowled'));
$bowler_wicket = array_merge($bowler_wicket, array_column($bollersCalls, 'playerWicketsTaken'));

$wicketsTeam_count=count($t_wicket);
$bscore_count=count($playerMatchRuns);
$count=count($playerNames);
$t_score_count=count($t_score);
$six=count($playerMatchSixes);
$four=count($playerMatchSixes);
$batManBall_c=count($playerMatchBalls);
$bowler_count=count($bowler);
$bowler_r_count=count($bowlerR);
$bowler_o_count=count($bowler_over);
$bowler_w_count=count($bowler_wicket);
$t_overs_count=count($t_overs);


$prefix = 'blanks';
$dynamicArray = [];

for ($i = 0; $i < $count; $i++) {
    $key = $prefix . $i;
    $dynamicArray[$key] = $playerNames[$i];
}

$prefixa = 'Team';

for ($i = 0; $i < $team_a; $i++) {
    $key = $prefixa . $i;
    $dynamicArray[$key] = isset($t_name[$i]) ? $t_name[$i] : 0;
}
$batsManBall = 'batsBall';

for ($i = 0; $i < $batManBall_c; $i++) {
    $key = $batsManBall . $i;
    $dynamicArray[$key] = $playerMatchBalls[$i] ;
}
$score = 'bscore';

for ($i = 0; $i < $bscore_count; $i++) {
    $key = $score . $i;
    $dynamicArray[$key] = $playerMatchRuns[$i];
}
$tscore = 'tscore';
for ($i = 0; $i < $t_score_count; $i++) {
    $key = $tscore . $i;
$tscores=[];
    if($t_score[0] < $t_score[1]){
$tscores[0]=$t_score[0];
        $tscores[1]=strval($t_score[1] - '4');

        $dynamicArray[$key] = isset($tscores[$i]) ? $tscores[$i] : 0;
    }
else{
    $dynamicArray[$key] = isset($t_score[$i]) ? $t_score[$i] : 0;
}
    
}
$bowler_name = 'bowler';

for ($i = 0; $i < $bowler_count; $i++) {
    $key = $bowler_name . $i;
    $dynamicArray[$key] = $bowler[$i];
}
$playerSix = 'playerSix';

for ($i = 0; $i < $six; $i++) {
    $key = $playerSix . $i;
    $dynamicArray[$key] = $playerMatchSixes[$i];
}
$playerFour = 'playerFour';

for ($i = 0; $i < $four; $i++) {
    $key = $playerFour . $i;
    $dynamicArray[$key] = $playerMatchFours[$i];
}

$bowlerRun = 'bowlerRun';

for ($i = 0; $i < $bowler_r_count; $i++) {
    $key = $bowlerRun . $i;
    $dynamicArray[$key] = $bowlerR[$i];
}

$boller_overN = 'bowlerOver';
for ($i = 0; $i < $bowler_o_count; $i++) {
    if (is_float($bowler_over[$i])) {
        continue;
    }
    $key = $boller_overN . $i;
    $dynamicArray[$key] = $bowler_over[$i];
}
$ballBalls = 'ballBalls';

for ($i = 0; $i < $bowler_o_count; $i++) {
    $key = $ballBalls . $i;
    $wholeOvers = floor($bowler_over[$i]);
    $fractionalPart = $bowler_over[$i] - $wholeOvers;
    $fractionalPartInt = intval($fractionalPart * 10);
    $totalBallsOver = (string)(($wholeOvers * 6) + $fractionalPartInt);
    $dynamicArray[$key] = $totalBallsOver;
}
$bowler_wicketN = 'bowlerWicket';

for ($i = 0; $i < $bowler_w_count; $i++) {
    $key = $bowler_wicketN . $i;
    $dynamicArray[$key] = $bowler_wicket[$i];
}
$Twickets = 'team_w';

for ($i = 0; $i < $wicketsTeam_count; $i++) {
    $key = $Twickets . $i;
    $dynamicArray[$key] = $t_wicket[$i];
}
$T_b_overs = 'team_over';

for ($i = 0; $i < $t_overs_count; $i++) {
    $key = $T_b_overs . $i;
    $wholeOvers = floor($t_overs[$i]);
    $fractionalPart = $t_overs[$i] - $wholeOvers;
    $fractionalPartInt = intval($fractionalPart * 10);
    $totalBalls = (string)(($wholeOvers * 6) + $fractionalPartInt);
    $dynamicArray[$key] = $totalBalls;
}
$Tovers = 't_over';

for ($i = 0; $i < $t_overs_count; $i++) {
    $key = $Tovers . $i;

    if (is_float($t_overs[$i])) {
        // Round down the decimal value
        dd($t_overs);
        $dynamicArray[$key] = floor($t_overs[$i]);
    } else {
        $dynamicArray[$key] = $t_overs[$i];
    }
}
$key='keeper';
$dynamicArray[$key]=$keeperTrue;
$key='noball';
$dynamicArray[$key]=$extras['noBalls'];
$key='wides0';
$dynamicArray[$key]=$extras['wides'];



 
    return $dynamicArray;
  }


    public function getafterStart(Request $request) {
        $user=Auth::User();
if(!$user){
$notification = array(
            'message' => 'Login/Registration before playing game', 
            'alert-type' => 'info'
           );

        return redirect('login')->with($notification);
}
$curl = curl_init();
$data = [
    'query' => "\n\tquery featuredMatches {\n    featurematch {\n      coverageLevel\n      IPLpolling {\n        name\n        isPolling\n        display\n        isAuctionStarted\n      }\n      criclyticsButtonFlags{\n        featuredSeriesName\n        isFinalFour\n        isPlayerIndex\n        tourID\n        seriesName\n      }\n      displayFeatureMatchScoreCard\n      seriesID\n      currentinningsNo\n      currentInningteamID\n      currentInningsTeamName\n      seriesName\n      homeTeamName\n      awayTeamName\n      toss\n      startEndDate\n      matchStatus\n      matchID\n      matchType\n      statusMessage\n      phaseOfInningFlag\n      matchNumber\n      venue\n      matchResult\n      startDate\n      playerOfTheMatch\n      playing11Status\n      probable11Status\n      playerID\n      winningTeamID\n      firstInningsTeamID\n      secondInningsTeamID\n      thirdInningsTeamID\n      seriesList {\n        count\n        name\n        tourID\n      }\n      teamsWinProbability {\n        homeTeamShortName\n        homeTeamPercentage\n        awayTeamShortName\n        awayTeamPercentage\n        tiePercentage\n      }\n      fourthInningsTeamID\n      matchScore {\n        teamShortName\n        teamID\n        teamFullName\n        teamScore {\n          inning\n          inningNumber\n          battingTeam\n          runsScored\n          wickets\n          overs\n          runRate\n          battingSide\n          teamID\n          battingTeamShortName\n          declared\n          folowOn\n        }\n      }\n      playerOfTheMatchdDetails {\n        batsmanTab\n        bowlerTab\n        playerID\n        playerTeamID\n        playerName\n        batsman {\n          isNotOut\n          batsmanBalls\n          batsmanRuns\n        }\n        bowler {\n          batsmanBalls\n          batsmanRuns\n          bowlerOvers\n          batsmanBalls\n          bowlerWickets\n          bowlerConceeded\n        }\n      }\n      superOver\n      teamsWinProbability {\n        homeTeamShortName\n        homeTeamPercentage\n        awayTeamShortName\n        awayTeamPercentage\n        tiePercentage\n      }\n      isCricklyticsAvailable\n      isLiveCriclyticsAvailable\n      isAbandoned\n      currentDay\n      currentSession\n      isHomeMatchUpade\n      content\n    }\n  }\n",
    'operationName' => 'featuredMatches'
];

curl_setopt_array($curl, [
    CURLOPT_URL => "https://apiv2.cricket.com/cricket",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
    ],
]);

$recall = curl_exec($curl);
$finalcall =json_decode($recall, true);

$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "Check your Internet connection";
} else {

 foreach ($finalcall as $final) {
    foreach ($final as $match) {
        foreach ($match as $matchData) {

            if (isset($matchData['matchType']) && $matchData['matchType'] != "Test") {
                $match_id = $matchData['matchID'];

                $existMatch = Live::where('match_id', $match_id)->first();

                

                if ($existMatch) {
                    $updateMatch = Live::find($existMatch->id);
                        $updateMatch->type = $matchData['matchType'];
                        $updateMatch->match_type = $matchData['seriesName'];
                        $updateMatch->match_id = $matchData['matchID'];
                        $updateMatch->is_live = $matchData['matchStatus'];
                        $updateMatch->result = $matchData['statusMessage'];
                        $updateMatch->match_location = $matchData['venue'];
                        $updateMatch->team_details = json_encode($matchData['matchScore']);
                        $updateMatch->save();
                    }
                 else {
                    
                    $cricketMatch = new Live();
                    $cricketMatch->type = $matchData['matchType']; 
                    $cricketMatch->match_type = $matchData['seriesName'];
                    $cricketMatch->match_id = $matchData['matchID'];
                    $cricketMatch->is_live = $matchData['matchStatus'];
                    $cricketMatch->result = $matchData['statusMessage'];
                    $cricketMatch->match_location = $matchData['venue'];
                    $cricketMatch->team_details = json_encode($matchData['matchScore']);
                    $cricketMatch->save();
                }
            }
        }
    }
}

     $question_category=Question_category::where('is_active',1)->get();

     $live = Live::orderBy('created_at', 'desc')->with('teamDetails')->get();
     $liveDetails = Livematch::orderBy('created_at', 'desc')->get();

foreach ($live as $matchL) {
        // Check if the match is older than today's date
        $matchDate = $matchL->created_at->toDateString();
        $todayDate = now()->toDateString();

        if ($matchDate < $todayDate) {
            // Change the status of the match
            $matchL->is_live = 'completed';
            $matchL->save();
        }
    }
foreach ($liveDetails as $liveDetailsL) {
        // Check if the match is older than today's date
        $matchDate = $liveDetailsL->created_at->toDateString();
        $todayDate = now()->toDateString();

        if ($matchDate < $todayDate) {
            // Change the status of the match
            $liveDetailsL->is_live = 'completed';
            $liveDetailsL->save();
        }
    }

$liveMatchesL = Live::where('is_live', 'live')
                    ->orderBy('created_at', 'desc')
                    ->with('teamDetails')
                    ->get();


if ($liveMatchesL->count() === 0) {

    $liveMatches = Live::where('is_live', 'completed')
                           ->orderBy('created_at', 'desc')
                           ->with('teamDetails')
                           ->take(7) // Adjust the number of completed matches to retrieve
                           ->get();
 $teacher_id = session('teacher_id');
    $std_id = session('std_id');
// dd('1');
        return view('after-start', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id);

} 
foreach($liveMatchesL as $detailMatch){
$teamLive=json_decode($detailMatch->team_details,true);


if (empty($teamLive[1]['teamScore'])) {

    $liveMatches = Live::where('is_live', 'completed')
                           ->orderBy('created_at', 'desc')
                           ->with('teamDetails')
                           ->take(7) // Adjust the number of completed matches to retrieve
                           ->get();
                            $teacher_id = session('teacher_id');
    $std_id = session('std_id');

        return view('after-start', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id);
                       

}
else{
    $liveMatches = Live::where('is_live', 'live')
                           ->orderBy('created_at', 'desc')
                           ->with('teamDetails')
                           ->get();
                            $teacher_id = session('teacher_id');
    $std_id = session('std_id');
    
        return view('after-start', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id);
}


     
}


   $teacher_id = session('teacher_id');
    $std_id = session('std_id');

        return view('after-start', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id);
}

       
    }
 
    public function  getStartGame(Request $req){
         
         $categoty_id=$req->category;

        $questions=Question::where('is_active',1)->get();

        $progress=Answer::where('user_id',3)->count();

        // echo $progress;die;

        return $questions;
       
     }



        public function firstStart(){
            $questions = Question::all();



$result=Livematch::where('match_id',242093)->get();
$resultLive=Live::where('match_id',242093)->first();
$team_details=$resultLive->team_details;

$team_d = json_decode($team_details, true);

dd($team_d);
   return View ("firstStart");
}
      public function getIndex()
    {
        $user=Auth::User();
        if($user!="")
        {
             if($user->role_id==1)
            {
              return redirect('dashboard');
            }

            if($user->role_id==2)
            {
              return view('index');
            }
            if($user->role_id==3)
            {
              return view('index');
            }
        }
        else
        {
            return view('index');

        }
       

    }

    public function getAbout()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getBlog()
    {
        return view('blog');
    }

    public function getGame()
    {
        return view('game');
    }

     public function getGame2()
    {
        return view('game_2');
    }

    public function getGameDetails()
    {
        return view('gameDetails');
    }

      public function getQuestion(Request $req)
    {
         $categoty_id=$req->category;

        $questions=Challenge_question::where('is_active',1)->where('type',$categoty_id)->with('option')->inRandomOrder()->take(1)->distinct()->find($past_question + 1)->get();

        $progress=Answer::where('user_id',3)->count();

        $data=array('questions'=>$questions,'progress'=>$progress);

        return $data;
    }

    public function postAnswer(Request $request)
    {
                $this->validate($request,Answer::$AnswerRule);

        $input=$request->all();



        // $is_correct=Challenge_question::where('challenge_question_id',$input['question_id'])->first();
        // $correctAnswer=$is_correct->answer;

        $option=challenge_question_option::where('challenge_question_option_id',$input['option_id'])->first();
        $selectedOptionText=$option->value;

         
if($selectedOptionText==null){
 $isCorrect="incorrect";
}
else{
     $isCorrect = ($selectedOptionText == 1) ? 'correct' : 'incorrect';  
}
        

        $answer=new Answer();

        $answer->question_id=$input['question_id'];        
        $answer->option_id=$input['option_id'];
        $answer->user_id=$input['user_id'];

        $answer->answer=$isCorrect;
                        // echo $answer;die;



        $answer->save();
   
        $given_answer=$answer->answer;

$category_id=$input['category'];
$past_question=$answer->question_id;


$valueStore=session(['past_question' => $past_question]);

$questions=Challenge_question::where('is_active',1)->where('type',$category_id)->with('option')->inRandomOrder()->take(1)->distinct()->get();
foreach ($questions as $key => $value) {
  $idnew=$value->challenge_question_id;
}

if($past_question!=$idnew){
$data = array('category_id' => $category_id,'given_answer'=>$given_answer,'questions'=>$questions);
}
else{
    $data='Test Done';
}

$selectedValue=$request->selectedValue;
    $matchLive=Live::where('match_id',$selectedValue);
           // return redirect("report/?given_answer=".$given_answer"&category=".$category_id"");


       // return response()->json([
       //      'data' => $data,
       //      'matchLive' => $matchLive,
       //  ]);
return $data;

// return redirect('report->with('given_answer',$given_answer)->with('category_id',$category_id);



    }

    public function getReportDisplay($given_answer,$category)
    {
  
        $isCorrect=$given_answer;
        $category=$category;
        
        return view('reportDisplay')->with('isCorrect',$isCorrect)->with('category_id',$category);
    }

    public function postContact(Request $request)
    {
        $input=$request->all();
        
        $contact=new Contact();
        $contact->name=$input['firstname'];
        $contact->last_name=$input['lastname'];
        $contact->email=$input['email'];
        $contact->phone_no=$input['phone_no'];
        $contact->message=$input['message'];

        $contact->save();

        $notification = array(
            'message' => 'Your Message Submitted Successfully', 
            'alert-type' => 'success'
           );

        return redirect('/')->with($notification);


        
    }


    public function getDataAuto() {

$curl = curl_init();
$data = [
    'query' => "\n\tquery featuredMatches {\n    featurematch {\n      coverageLevel\n      IPLpolling {\n        name\n        isPolling\n        display\n        isAuctionStarted\n      }\n      criclyticsButtonFlags{\n        featuredSeriesName\n        isFinalFour\n        isPlayerIndex\n        tourID\n        seriesName\n      }\n      displayFeatureMatchScoreCard\n      seriesID\n      currentinningsNo\n      currentInningteamID\n      currentInningsTeamName\n      seriesName\n      homeTeamName\n      awayTeamName\n      toss\n      startEndDate\n      matchStatus\n      matchID\n      matchType\n      statusMessage\n      phaseOfInningFlag\n      matchNumber\n      venue\n      matchResult\n      startDate\n      playerOfTheMatch\n      playing11Status\n      probable11Status\n      playerID\n      winningTeamID\n      firstInningsTeamID\n      secondInningsTeamID\n      thirdInningsTeamID\n      seriesList {\n        count\n        name\n        tourID\n      }\n      teamsWinProbability {\n        homeTeamShortName\n        homeTeamPercentage\n        awayTeamShortName\n        awayTeamPercentage\n        tiePercentage\n      }\n      fourthInningsTeamID\n      matchScore {\n        teamShortName\n        teamID\n        teamFullName\n        teamScore {\n          inning\n          inningNumber\n          battingTeam\n          runsScored\n          wickets\n          overs\n          runRate\n          battingSide\n          teamID\n          battingTeamShortName\n          declared\n          folowOn\n        }\n      }\n      playerOfTheMatchdDetails {\n        batsmanTab\n        bowlerTab\n        playerID\n        playerTeamID\n        playerName\n        batsman {\n          isNotOut\n          batsmanBalls\n          batsmanRuns\n        }\n        bowler {\n          batsmanBalls\n          batsmanRuns\n          bowlerOvers\n          batsmanBalls\n          bowlerWickets\n          bowlerConceeded\n        }\n      }\n      superOver\n      teamsWinProbability {\n        homeTeamShortName\n        homeTeamPercentage\n        awayTeamShortName\n        awayTeamPercentage\n        tiePercentage\n      }\n      isCricklyticsAvailable\n      isLiveCriclyticsAvailable\n      isAbandoned\n      currentDay\n      currentSession\n      isHomeMatchUpade\n      content\n    }\n  }\n",
    'operationName' => 'featuredMatches'
];

curl_setopt_array($curl, [
    CURLOPT_URL => "https://apiv2.cricket.com/cricket",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
    ],
]);

$recall = curl_exec($curl);
$finalcall =json_decode($recall, true);

$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "Check your Internet connection";
} else {

 foreach ($finalcall as $final) {
    foreach ($final as $match) {
        foreach ($match as $matchData) {

            if (isset($matchData['matchType']) && $matchData['matchType'] != "Test") {
                $match_id = $matchData['matchID'];

$curl = curl_init();

$dataT = ' {"query":"\n  query getScoreCard($matchID: String!) {\n    getScoreCard(matchID: $matchID) {\n      fullScoreCard {\n        Substitutes {\n          playerInID\n          playerInName\n          teamID\n          playerOutID\n          playerOutName\n        }\n        impactPlayer\n        battingTeamName\n        battingTeamShortName\n        battingTeamID\n        runsScored\n        wickets\n        overs\n        runRate\n        runRateProjection {\n          rr\n          oversRemaining\n          runs\n        }\n        nextBatsmans {\n          playerID\n          playerName\n          playerTeam\n          playerMatchSixes\n          playerMatchFours\n          playerMatchBalls\n          playerMatchRuns\n          playerBattingNumber\n          playerMatchStrikeRate\n          playerMatchAvg\n          isNotOut\n          zad {\n            runs\n            zadval\n          }\n        }\n        batting {\n          matchID\n          playerID\n          playerName\n          playerTeam\n          playerMatchSixes\n          playerMatchFours\n          playerMatchBalls\n          playerMatchRuns\n          playerBattingNumber\n          playerDismissalInfo\n          playerHowOut\n          playerMatchStrikeRate\n          isCaptain\n          isKeeper\n          battingStyle\n          playingStatus\n          isSubstitutePlayer\n          battingStyle\n          zad {\n            runs\n            zadval\n          }\n        }\n        bowling {\n          matchID\n          playerID\n          playerName\n          playerTeam\n          playerDotBalls\n          playerWicketsTaken\n          playerMaidensBowled\n          playerRunsConceeded\n          playerWides\n          playerNoBall\n          playerOversBowled\n          playerEconomyRate\n          isCaptain\n          playingStatus\n          isSubstitutePlayer\n        }\n        extras {\n          byes\n          legByes\n          noBalls\n          penalties\n          wides\n          totalExtras\n        }\n        fow {\n          playerName\n          playerID\n          order\n          over_ball\n          runs\n          isCaptain\n          isKeeper\n        }\n        total {\n          overs\n          runsScored\n          wickets\n          runRate\n        }\n      }\n    }\n  }\n","variables":{"matchID":"'.$match_id.'"},"operationName":"getScoreCard"} ';

curl_setopt_array($curl, [
    CURLOPT_URL => "https://apiv2.cricket.com/cricket",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $dataT,
    CURLOPT_HTTPHEADER => [
        "Content-Type: plain/text",
    ],
]);

$recall = curl_exec($curl);
$finalcall = json_decode($recall, true);

$err = curl_error($curl);
curl_close($curl);

$matchLive = Live::where('match_id', $match_id)->get();
$live_id = "";  
$match_id = "";

foreach ($matchLive as $matchL) {
    $live_id = $matchL->id;
    $match_id = $matchL->match_id;
    $is_live = $matchL->is_live;
}

if (!empty($finalcall['data']['getScoreCard']['fullScoreCard'])) {
    foreach ($finalcall['data']['getScoreCard']['fullScoreCard'] as $item) {
        Livematch::updateOrCreate(
            ['match_id' => $match_id, 'battingTeamID' => $item['battingTeamID']],
            [
                'is_live' => $is_live,
                'match_id' => $match_id,
                'battingTeamName' => $item['battingTeamName'],
                'battingTeamShortName' => $item['battingTeamShortName'],
                'battingTeamID' => $item['battingTeamID'],
                'runsScored' => $item['runsScored'],
                'wickets' => $item['wickets'],
                'overs' => $item['overs'],
                'runRate' => $item['runRate'],
                'runrateprojection' => json_encode($item['runRateProjection']),
                'nextBatsmans' => json_encode($item['nextBatsmans']),
                'batting' => json_encode($item['batting']),
                'bowling' => json_encode($item['bowling']),
                'extras' => json_encode($item['extras']),
                'fow' => json_encode($item['fow']),
                'total' => json_encode($item['total']),
            ]
        );
    }
}




                $existMatch = Live::where('match_id', $match_id)->first();

                

                if ($existMatch) {
                    $updateMatch = Live::find($existMatch->id);
                        $updateMatch->type = $matchData['matchType'];
                        $updateMatch->match_type = $matchData['seriesName'];
                        $updateMatch->match_id = $matchData['matchID'];
                        $updateMatch->is_live = $matchData['matchStatus'];
                        $updateMatch->result = $matchData['statusMessage'];
                        $updateMatch->match_location = $matchData['venue'];
                        $updateMatch->team_details = json_encode($matchData['matchScore']);
                        $updateMatch->save();
                    }
                 else {
                    
                    $cricketMatch = new Live();
                    $cricketMatch->type = $matchData['matchType']; 
                    $cricketMatch->match_type = $matchData['seriesName'];
                    $cricketMatch->match_id = $matchData['matchID'];
                    $cricketMatch->is_live = $matchData['matchStatus'];
                    $cricketMatch->result = $matchData['statusMessage'];
                    $cricketMatch->match_location = $matchData['venue'];
                    $cricketMatch->team_details = json_encode($matchData['matchScore']);
                    $cricketMatch->save();
                }
            }
        }
    }
}

    

        return "Data saved";
}

       
    }



}







