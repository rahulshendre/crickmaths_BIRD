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
use App\Models\Level;
use App\Models\Scoreboard;
use App\Models\Trivia;
use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Services\CricketApiService;

use session;
class PublicController extends Controller
{
    public function getliveScore(Request $request){
        $matchID=$request->match_id;
        $matchLive=Live::where('match_id',$matchID)->get();
        return response()->json($matchLive);
    }
public function localone(){
    return view('localone');
}


  public function postPlayNow(Request $request)
{
    
    $user = User::where('username', $request->username)->first();

    if (!$user) {
        // If the user doesn't exist, create a new one
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->username; 
        $user->role_id = 2; 
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::login($user);

        return redirect('after-start');
    }

    if ($user->role_id != 1) {
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('after-start');
        } else {
            return back()->withErrors(['password' => 'The password is incorrect.'])->withInput();
        }
    } else {
        Auth::login($user);
        return redirect('dashboard');
    }
}


   public function checkUsername($username)
    {
        $exists = User::where('username', $username)->exists();

        // return $exists;

        // Return a JSON response
        return response()->json(['exists' => $exists]);
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

// Use CricketApiService instead of direct API call
$cricketService = new CricketApiService();
$finalcall = $cricketService->getScorecard($matchID);

if (empty($finalcall)) {
    return "check your Internet connection";
}

$matchLive=Live::where('match_id',$matchID)->get();
$live_id="";  
$match_id=$matchID;  // Keep the original matchID
foreach($matchLive as $matchL){
    $live_id=$matchL->id;
    $is_live=$matchL->is_live;
}

if(!empty($finalcall) && isset($finalcall['data']['getScoreCard']['fullScoreCard'])){

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
                'nextbatsmans' => json_encode($item['nextBatsmans']),
                'batting' => json_encode($item['batting']),
                'bowling' => json_encode($item['bowling']),
                'extras' => json_encode($item['extras']),
                'fow' => json_encode($item['fow']),
                'total' => json_encode($item['total']),
            ]
        );
    }
}

 $matchLive=Live::where('match_id',$matchID)->get();
$result=Livematch::where('match_id',$matchID)->get();

        $categoty_id=$req->category;

        $questions=Challenge_question::where('is_active',1)->where('type',$categoty_id)->with('option')->inRandomOrder()->take(1)->distinct()->get();

        $progress=Answer::where('user_id',3)->count();


$player="V";
 $level=$req->level;
        return view('answer')->with('questions',$questions)->with('categoty',$categoty_id)->with('grade',$level)->with('matchLive',$matchLive)->with('match_id',$matchID)->with('player',$player);
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


  $grade=$request->grade;

   // return $grade;

 
$questions = Question::where('grade',$grade)->get();


$result=Livematch::where('match_id',$request->match_id)->get();
$resultLive=Live::where('match_id',$request->match_id)->first();

// Add null check
if (!$resultLive || !$resultLive->team_details) {
    return response()->json(['error' => 'Match data not found'], 404);
}

$team_details=$resultLive->team_details;

$team_d = json_decode($team_details, true);
if (!$team_d || !is_array($team_d)) {
    return response()->json(['error' => 'Invalid team details'], 500);
}

$t_wicket=[];
$t_name = [];
$t_score=[];
$t_overs=[];

foreach ($team_d as $index => $value) {
    // Check if 'teamScore' key exists and is not empty
    if (isset($value['teamScore']) && !empty($value['teamScore']) && isset($value['teamScore'][0])) {
        // Cricbuzz format uses 'teamShortName', old format uses 'battingTeamShortName'
        $battingTeamShortName = $value['teamShortName'] ?? ($value['teamScore'][0]['battingTeamShortName'] ?? '');
        $battingscore=isset($value['teamScore'][0]['runsScored']) ? $value['teamScore'][0]['runsScored'] : 0;
        $t_wicket1=$value['teamScore'][0]['wickets'] ?? 0;
        
        // Safely access team_d[1] if it exists
        if(isset($team_d[1]) && isset($team_d[1]['teamScore']) && !empty($team_d[1]['teamScore']) && isset($team_d[1]['teamScore'][0])){
            $t_wicket2=$team_d[1]['teamScore'][0]['wickets'] ?? "0";
        } else {
            $t_wicket2="0";
        }
        
        if(isset($team_d[1]) && isset($team_d[1]['teamScore']) && !empty($team_d[1]['teamScore']) && isset($team_d[1]['teamScore'][0])){
            $battingsc=$team_d[1]['teamScore'][0]['runsScored'] ?? "0";
        } else {
            $battingsc="0";
        }

        $TeamOver0=isset($value['teamScore'][0]['overs']) ? round($value['teamScore'][0]['overs']) : 0;
        $TeamOver1=isset($team_d[1]['teamScore'][0]['overs']) ? round($team_d[1]['teamScore'][0]['overs']) : 0;

        // Add to the result array
        if ($battingTeamShortName) {
            $t_name[] = $battingTeamShortName;
        }
        $t_wicket[]=$t_wicket1;
        $t_wicket[]=$t_wicket2;
        $t_score[] = $battingscore;
        $t_score[] = $battingsc;
        $t_overs[] = strval($TeamOver0);
        $t_overs[] = strval($TeamOver1);
    }
}

// Safely get team short name
if(isset($team_d[1]) && isset($team_d[1]['teamShortName'])){
    $battingTeamShor=$team_d[1]['teamShortName'];
    $t_name[] = $battingTeamShor;
} elseif(isset($team_d[1]) && isset($team_d[1]['teamScore'][0]['battingTeamShortName'])){
    $battingTeamShor=$team_d[1]['teamScore'][0]['battingTeamShortName'];
    $t_name[] = $battingTeamShor;
}

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

// $batsManBall = 'batsBall';

// for ($i = 0; $i < $batManBall_c; $i++) {
//     $key = $batsManBall . $i;
//     $dynamicArray[$key] = $playerMatchBalls;[$i] ;
// }


$batsManBall = 'batsBall';

for ($i = 0; $i < $batManBall_c; $i++) {
    $key = $batsManBall . $i;
    $dynamicArray[$key] = $playerMatchBalls[$i]; // Corrected the array access here
}




for ($i = 0; $i < $batManBall_c; $i++) {
    $key = $batsManBall . $i;
    if ($playerMatchBalls[$i] >= 0 && $playerMatchBalls[$i] <= 9) { // Check for single-digit values
        $dynamicArray[$key] = $playerMatchBalls[$i];
    }
}






$score = 'bscore';


// if($grade==1)
// {
//    for ($i = 0; $i < $bscore_count; $i++) {
//     $key = $score . $i;
//     // Ensure only single-digit values are stored
//     $runValue = $playerMatchRuns[$i] % 10; // Convert any number to a single-digit if it's more than 9

//     $dynamicArray[$key] = $runValue;

//     return $dynamicArray;
//    }
// }


if ($grade == 1) {
    for ($i = 0; $i < $bscore_count; $i++) {
        $key = $score . $i;
        
        // Get the last digit by using modulus 10
        $runValue = $playerMatchRuns[$i] % 10;  // This already gives you the last digit

        // Alternatively, if you want to strip all digits except the last one, use integer division by 10 repeatedly.
        // For example, 132 -> 2, 22 -> 2
        while ($playerMatchRuns[$i] >= 10) {
            $playerMatchRuns[$i] = (int)($playerMatchRuns[$i] / 10);  // Remove last digit
        }
        
        // Now, $playerMatchRuns[$i] is reduced to a single digit
        $dynamicArray[$key] = $playerMatchRuns[$i];

        // Return after the loop, not inside the loop
    }

    // return $dynamicArray;
}


if($grade==2)
{
    for ($i = 0; $i < $bscore_count; $i++) {
    $key = $score . $i;
    $value = $playerMatchRuns[$i];

    // Ensure value is a single-digit or two-digit number
    if ($value > 99) {
        $value = $value % 10;  // Convert values greater than 99 to a single-digit
    }

    $dynamicArray[$key] = $value;
   }

}
// return $dynamicArray;


if ($grade !== 1 || $grade != 2)
{
     for ($i = 0; $i < $bscore_count; $i++) {
     $key = $score . $i;
     $dynamicArray[$key] = $playerMatchRuns[$i];
    }

           // return $grade;


}



    










$tscore = 'tscore';

// if ($grade == 1) {
//     for ($i = 0; $i < $t_score_count; $i++) {
//         $key = $tscore . $i;

//         // Ensure single-digit values (0-9)
//         $value = isset($t_score[$i]) ? $t_score[$i] : 0;

//         // If grade is 1, ensure only single-digit values
//         $dynamicArray[$key] = ($value >= 0 && $value <= 9) ? $value : $value % 10;

//         // return $dynamicArray;
//     }
// }

if ($grade !== 1 || $grade !== 2)
{
     for ($i = 0; $i < $t_score_count; $i++) {
        $key = $tscore . $i;
        $tscores = [];

        if ($t_score[0] < $t_score[1]) {
            $tscores[0] = $t_score[0];
            $tscores[1] = max(1, intval($t_score[1] - 4)); // Convert to integer and ensure it's at least 1

            $dynamicArray[$key] = isset($tscores[$i]) ? $tscores[$i] : 0;
        } else {
            $dynamicArray[$key] = isset($t_score[$i]) ? $t_score[$i] : 0;
        }
    }

}


if ($grade == 1) {
    for ($i = 0; $i < $t_score_count; $i++) {
        $key = $tscore . $i;

        // Ensure single-digit values (0-9)
        $value = isset($t_score[$i]) ? $t_score[$i] : 0;

        // If the number is greater than one digit, retain only the first digit
        if ($value > 9) {
            $value = intval(substr((string)$value, 0, 1));
        }

        // Store the processed single-digit value in the dynamic array
        $dynamicArray[$key] = $value;
    }
    // Uncomment this if you want to return the dynamic array outside the loop
    // return $dynamicArray;
}


if ($grade == 2) {
    for ($i = 0; $i < $t_score_count; $i++) {
        $key = $tscore . $i;
        $tscores = [];

        // Ensure values are between 0 and 99
        if (isset($t_score[0]) && isset($t_score[1])) {
            if ($t_score[0] < $t_score[1]) {
                $tscores[0] = $t_score[0];
                $tscores[1] = max(1, intval($t_score[1] - 4)); // Adjust based on logic

                // Ensure the score is within range (0-99)
                $dynamicArray[$key] = isset($tscores[$i]) ? min(99, max(0, $tscores[$i])) : 0;
            } else {
                // Ensure the score is within range (0-99)
                $dynamicArray[$key] = isset($t_score[$i]) ? min(99, max(0, $t_score[$i])) : 0;
            }
        }
    }

}



   

$tpscore = 'tpscore';
$tpscores = []; // Define the array outside the loop

for ($i = 0; $i < $t_score_count; $i++) {
    $key = $tpscore . $i;

    // Process each t_score value
    if ($t_score[$i] >= 100) {
        // Remove the last digit for three-digit scores
        $t_score[$i] = intval($t_score[$i] / 10);
    }

    // Assign the processed value to tpscores
    $tpscores[$i] = $t_score[$i];

    // Add the processed value to the dynamic array with the correct key
    $dynamicArray[$key] = $tpscores[$i];
}

// Output or use the $dynamicArray as needed
// return $dynamicArray;





// $originalScores = []; // To store the original scores
// $convertedScores = []; // To store the converted scores

// for ($i = 0; $i < $t_score_count; $i++) {
//     $key = $tscore . $i;

//     // Save the original score
//     $originalScores[$key] = $t_score[$i];

//     // Convert the score if it's three digits
//     if ($t_score[$i] >= 100) {
//         $convertedScores[$key] = intval($t_score[$i] / 10); // Remove the last digit
//     } else {
//         $convertedScores[$key] = $t_score[$i]; // Keep the original value
//     }

//     // Populate the dynamic array based on the logic
//     if ($t_score[0] < $t_score[1]) {
//         $tscores[0] = $convertedScores[$tscore . '0'];
//         $tscores[1] = max(1, intval($convertedScores[$tscore . '1'] - 4)); // Ensure at least 1

//         $dynamicArray[$key] = isset($tscores[$i]) ? $tscores[$i] : 0;
//     } else {
//         $dynamicArray[$key] = isset($convertedScores[$key]) ? $convertedScores[$key] : 0;
//     }
// }


// return $dynamicArray;







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



if($grade!==1 || $grade!==2)
{
      for ($i = 0; $i < $bowler_r_count; $i++) {
      $key = $bowlerRun . $i;
      $dynamicArray[$key] = $bowlerR[$i];
      }
}



if ($grade == 1) {
    for ($i = 0; $i < $bowler_r_count; $i++) {
        $key = $bowlerRun . $i;
        $currentValue = $bowlerR[$i];

        // Check if the value is a single-digit; if not, convert it to a single-digit
        if ($currentValue >= 0 && $currentValue <= 9) {
            $dynamicArray[$key] = $currentValue;
        } else {
            $dynamicArray[$key] = $currentValue % 10; // Convert to the last digit
        }
    }

    // return $dynamicArray;
}


if($grade==2)
{
     for ($i = 0; $i < $bowler_r_count; $i++) {
    $key = $bowlerRun . $i;
    $currentValue = $bowlerR[$i];
    
    // If the number is greater than 99, keep only the last two digits
    if ($currentValue > 99) {
        $currentValue = $currentValue % 100; // Get the last two digits
    }
    
    // Store the single or two-digit value in the dynamic array
    $dynamicArray[$key] = $currentValue;
}


}

     









$boller_overN = 'bowlerOver';

if($grade==1)
{
    for ($i = 0; $i < $bowler_o_count; $i++) {
    // Skip if it's a floating-point number
    if (is_float($bowler_over[$i])) {
        continue;
    }
    
    $key = $boller_overN . $i;
    $currentValue = $bowler_over[$i];

    // Check if the value is a single-digit; if not, convert it to a single digit
    if ($currentValue >= 0 && $currentValue <= 9) {
        $dynamicArray[$key] = $currentValue;
    } else {
        $dynamicArray[$key] = $currentValue % 10; // Convert to the last digit
    }
   }
}

if($grade==2)
{
    for ($i = 0; $i < $bowler_o_count; $i++) {
    // Skip if the value is a floating-point number
    if (is_float($bowler_over[$i])) {
        continue;
    }

    $key = $boller_overN . $i;
    $currentValue = $bowler_over[$i];

    // If the number is greater than 99, keep only the last two digits
    if ($currentValue > 99) {
        $currentValue = $currentValue % 100; // Get the last two digits
    }

    // Store the single or two-digit value in the dynamic array
    $dynamicArray[$key] = $currentValue;
}

}

for ($i = 0; $i < $bowler_o_count; $i++) {

    if (is_float($bowler_over[$i]) || strpos((string)$bowler_over[$i], '.') !== false) {
        $bowler_over[$i] = (int)$bowler_over[$i];
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


if($grade==1)
{
    for ($i = 0; $i < $wicketsTeam_count; $i++) {
    $key = $Twickets . $i;
    $currentValue = $t_wicket[$i];

    // Check if the value is a single-digit number
    if ($currentValue >= 1 && $currentValue <= 9) {
        $dynamicArray[$key] = $currentValue;
    } else {
        // Convert multi-digit value to a single digit using the last digit
        $singleDigit = $currentValue % 10;

        // If the last digit is 0, replace it with 1
        $dynamicArray[$key] = ($singleDigit === 0) ? 1 : $singleDigit;
    }
 }

}

if($grade==2)
{
    for ($i = 0; $i < $wicketsTeam_count; $i++) {
    $key = $Twickets . $i;
    $currentValue = $t_wicket[$i];

    // If the number is greater than 99, keep only the last two digits
    if ($currentValue > 99) {
        $currentValue = $currentValue % 100; // Get the last two digits
    }

    // Store the single or two-digit value in the dynamic array
    $dynamicArray[$key] = $currentValue;
}


}

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

if($grade==1)
{
        for ($i = 0; $i < $t_overs_count; $i++) {
    $key = $Tovers . $i;
    
    if (isset($t_overs[$i])) {
        $currentValue = $t_overs[$i];
        
        // Check if the value is a float and round down if so
        if (is_float($currentValue)) {
            $currentValue = floor($currentValue);
        }

        // Convert to single-digit if the value is multi-digit
        if ($currentValue >= 1 && $currentValue <= 9) {
            $dynamicArray[$key] = $currentValue;
        } else {
            // Extract the first digit of a multi-digit number
            $dynamicArray[$key] = intval(substr((string) $currentValue, 0, 1));
        }
    } else {
        // Default value if not available
        $dynamicArray[$key] = 1;
    }
  }

}

if($grade==2)
{
      for ($i = 0; $i < $t_overs_count; $i++) {
    $key = $Tovers . $i;
    $currentValue = $t_overs[$i];

    // Round down if the value is a float
    if (is_float($currentValue)) {
        $currentValue = floor($currentValue);
    }

    // If the number is greater than 99, keep only the last two digits
    if ($currentValue > 99) {
        $currentValue = $currentValue % 100; // Get the last two digits
    }

    // Store the single or two-digit value in the dynamic array
    $dynamicArray[$key] = $currentValue;
}

}

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





// $key='keeper';
// $dynamicArray[$key]=$keeperTrue;
// $key='noball';
// $dynamicArray[$key]=$extras['noBalls'];
// $key='wides0';
// $dynamicArray[$key]=$extras['wides'];

$key = 'keeper';
$dynamicArray[$key] = $keeperTrue;

$key = 'noball';
$dynamicArray[$key] = isset($extras['noBalls']) ? $extras['noBalls'] : 0;

$key = 'wides0';
$dynamicArray[$key] = isset($extras['wides']) ? $extras['wides'] : 0;




 
    return $dynamicArray;
  }


   

   
   


    public function getafterStart(Request $request) {
        $user=Auth::User();
if(!$user){
$notification = array(
            'message' => 'Add Username before playing game', 
            'alert-type' => 'info'
           );

        return redirect('login')->with($notification);
}

// Use CricketApiService instead of direct API call
$cricketService = new CricketApiService();
$finalcall = $cricketService->getFeaturedMatches();

if (!empty($finalcall) && isset($finalcall['data']['featurematch'])) {
    foreach ($finalcall['data']['featurematch'] as $matchData) {
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

    public function  getStartGame(Request $req){
         
         $categoty_id=$req->category;
         // $grade=$req->grade;
         $grade=$req->grade;

         // return $grade;
       

     $questions = Question::where('is_active', 1)
                    ->where('grade',$grade)
                    ->whereNotNull('description')
                    ->where('description', '<>', '')
                    // ->whereRaw("question REGEXP '([0-9]{1}\\s)\\+'")
                    ->take(60) 
                    ->get();


   

        $progress=Answer::where('user_id',3)->count();


        return $questions;
       
     }



        public function firstStart(){
            $questions = Question::all();



$result=Livematch::where('match_id',242093)->get();
$resultLive=Live::where('match_id',242093)->first();
$team_details=$resultLive->team_details;

$team_d = json_decode($team_details, true);


   return View ("firstStart");
}


public function getIndex(Request $request) {


     $user=Auth::User();
        if($user!="")
        {
             if($user->role_id==1)
            {
              return redirect('dashboard');
            }
        }


// $students = Scoreboard::with('user')->orderBy('score', 'desc')
//             ->limit(5) 
//             ->get();


      // echo $students;die;


// $students = Student::whereNotNull('score') // Ensures 'score' is not null
//                   ->orderBy('score', 'desc') // Orders by score in descending order
//                   ->take(5) // Limits the result to 5 students
//                   ->get(); // Executes the query and gets the result
                   
   $students = Scoreboard::with('user')
    ->whereHas('user') // Ensures only records with a valid user are selected
    ->whereIn('id', function($query) {
        $query->select(\DB::raw('MAX(id)')) // Gets the latest entry for each user
              ->from('scoreboards')
              ->groupBy('user_id');
    })
    ->orderByRaw('CAST(score AS UNSIGNED) DESC') // Convert VARCHAR to INT for correct sorting
    ->take(5)
    ->get();


    
    // echo $students;die;

       
// Use CricketApiService instead of direct API call
$cricketService = new CricketApiService();
$finalcall = $cricketService->getFeaturedMatches();

if (!empty($finalcall) && isset($finalcall['data']['featurematch'])) {
    foreach ($finalcall['data']['featurematch'] as $matchData) {
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
        return view('index', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id)->with('students',$students);

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

        return view('index', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id)->with('students',$students);
                       

}
else{
    $liveMatches = Live::where('is_live', 'live')
                           ->orderBy('created_at', 'desc')
                           ->with('teamDetails')
                           ->get();
                            $teacher_id = session('teacher_id');
    $std_id = session('std_id');
    
        return view('index', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id)->with('students',$students);
}


     
}


   $teacher_id = session('teacher_id');
    $std_id = session('std_id');

        return view('index', ['category'=>$question_category,'liveMatches'=>$liveMatches])->with('teacher_id',$teacher_id)->with('std_id',$std_id)->with('students',$students)->with('score',$score);
}

    //   public function getIndex()
    // {
    //     $user=Auth::User();
    //     if($user!="")
    //     {
    //          if($user->role_id==1)
    //         {
    //           return redirect('dashboard');
    //         }

    //         if($user->role_id==2)
    //         {
    //           return view('index');
    //         }
    //         if($user->role_id==3)
    //         {
    //           return view('index');
    //         }
    //     }
    //     else
    //     {
    //         return view('index');

    //     }
       

    // }

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

public function getGallery()
    {
        return view('gallery');
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

try {

// Use CricketApiService instead of direct API call
$cricketService = new CricketApiService();
$finalcall = $cricketService->getFeaturedMatches();

if (!empty($finalcall) && isset($finalcall['data']['featurematch'])) {
    foreach ($finalcall['data']['featurematch'] as $matchData) {
            if (isset($matchData['matchType']) && $matchData['matchType'] != "Test") {
                $match_id = $matchData['matchID'];

// Get scorecard for this match
$scorecardData = $cricketService->getScorecard($match_id);

$matchLive = Live::where('match_id', $match_id)->get();
$live_id = "";  
$is_live = "";

foreach ($matchLive as $matchL) {
    $live_id = $matchL->id;
    $is_live = $matchL->is_live;
}

if (!empty($scorecardData['data']['getScoreCard']['fullScoreCard'])) {
    foreach ($scorecardData['data']['getScoreCard']['fullScoreCard'] as $item) {
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

}catch (Exception $e) {
    Log::error('getDataAuto error: ' . $e->getMessage());
}

}

public function getHowzzat(Request $request)
{
    return view('howzzat');
}

public function getPavilion(Request $request)
{
    return view('pavilion');
}

public function getCricketlingo(Request $request)
{
    return view('cricketlingo');
}

public function getUserDashboard(Request $request)
{
    $user=Auth::User();

    if($user!="")
    {
        $scores = DB::table('scoreboards')
        ->orderBy('user_id')
        ->orderBy('created_at', 'desc')
        ->get()
        ->groupBy('user_id');

    // Process each user's latest 3 matches
    $userGrades = [];
    foreach ($scores as $userId => $userScores) {
        // Take only the latest 3 matches for the user
        $latestScores = $userScores->take(3);

        $matches75 = 0;
        $matches90 = 0;

        foreach ($latestScores as $score) {
            $totalMarks = $score->question_atempt * 10; // Each question is worth 10 marks
            $percentage = ($totalMarks > 0) ? ($score->score / $totalMarks) * 100 : 0;

            if ($percentage >= 75) {
                $matches75++;
            }
            if ($percentage >= 90) {
                $matches90++;
            }
        }

        // Assign grade based on the percentages in the last 3 matches
        $grade = 'Bronze';
        if ($matches90 >= 3) {
            $grade = 'Platinum';
        } elseif ($matches75 >= 3) {
$grade = 'Gold';
        } elseif ($matches75 >= 2) {
            $grade = 'Silver';
        }

        $userGrades[] = [
            'user_id' => $userId,
            'matches75' => $matches75,
            'matches90' => $matches90,
            'grade' => $grade
        ];
    }

    $no_of_match_count=Scoreboard::where('user_id',Auth::User()->id)->count();

    $todayMatche = Scoreboard::where('user_id', $user->id)
            ->whereDate('created_at', now()->toDateString()) // Filter by current date
            ->orderBy('created_at', 'desc')->with('user') // Order by date, most recent first
            ->get();

       return view('userdashboard')->with('user',$user)->with('userGrades',$userGrades)->with('no_of_match_count',$no_of_match_count)->with('todayMatche',$todayMatche);
    }
    else
    {
        return redirect('login');
    }

}

public function editProfile(Request $request)
{

    $user=Auth::User();

    if($user!="")
    {
         return view('editprofile')->with('user');
    }
    else
    {
        return redirect('login');
    }

   
}

public function getUserScoreRecord(Request $request)
{
    $user=Auth::User();

    $score=Scoreboard::where('user_id',$user->id)->with('user')->get();

    return view('scorerecord')->with('score',$score);

}


public function gettrivo(Request $request)
    {
        $usedIds = $request->input('usedIds', []);

        // Fetch a random trivia not in the used IDs
        $trivia = Trivia::whereNotIn('id', $usedIds)->inRandomOrder()->first();

        if ($trivia) {
            return response()->json([
                'success' => true,
                'trivia' => $trivia,
            ]);
        } else {
            // If all trivia are used, notify the frontend to reset
            return response()->json([
                'success' => true,
                'reset' => true,
            ]);
        }
    }










}







