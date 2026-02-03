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

use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use session;
class PublicController extends Controller
{
    public function getProfile(){
        <?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/matches/v1/recent",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: 3978d5d72amshdf31675d64e964ep1aeb27jsn4bb3a25730eb"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
dd()
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
    $user_id = auth()->id();
    $userDetails=User::where('id',$user_id)->with('answer')->get();
    $reportTable=Answer::where('user_id',$user_id)->get();
  

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


      return view('profile')->with('userdetail',$userDetails)->with('tableData', $tableData);
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
$selectedValue=$req->selectedValue;

 $matchLive=Live::where('match_id',$selectedValue)->get();

        $categoty_id=$req->category;

        $questions=Challenge_question::where('is_active',1)->where('type',$categoty_id)->with('option')->inRandomOrder()->take(1)->distinct()->get();

        $progress=Answer::where('user_id',3)->count();

        // echo $progress;die;

        return view('answer')->with('questions',$questions)->with('categoty',$categoty_id)->with('matchLive',$matchLive);
    }





    public function getafterStart(){
 $curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://free-cricket-live-score.p.rapidapi.com/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'key' => 'ignor'
    ]),
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: free-cricket-live-score.p.rapidapi.com",
        "X-RapidAPI-Key: 3978d5d72amshdf31675d64e964ep1aeb27jsn4bb3a25730eb",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$user_id = auth()->id();
$responseArray =json_decode($response, true);
// dd($responseArray);
foreach ($responseArray as $matchData) {
    $matchType=$matchData['match_type'];
$existMatch=Live::where('match_type',$matchType)->first();
if($existMatch==$matchData['match_type']){
$updateMatch->match_type=$matchData['match_type'];
$updateMatch->is_live=$matchData['is_live'];

$updateMatch->result=$matchData['result'];

$updateMatch->match_location=$matchData['match_location'];
$updateMatch->team_details=json_encode($matchData['team_details']);
$updateMatch->save();
}
else{
      $cricketMatch=new Live();
$cricketMatch->match_type=$matchData['match_type'];
$cricketMatch->is_live=$matchData['is_live'];

$cricketMatch->result=$matchData['result'];

$cricketMatch->match_location=$matchData['match_location'];

$cricketMatch->team_details=json_encode($matchData['team_details']);
$cricketMatch->save();
   
}
}
        $questions=Challenge_question::where('is_active',1)->with('option')->inRandomOrder()->take(1)->get();

        $progress=Answer::where('user_id',3)->count();

     $question_category=Question_category::where('is_active',1)->get();
$matcheshow=Livematch::all();  
$liveMatches = Live::orderBy('created_at', 'desc')->with('teamDetails')->get();

        return view('after-start', ['questions' => $questions,'progress'=>$progress,'category'=>$question_category,'liveMatches'=>$liveMatches]);
    }
  
    public function  getStartGame(Request $req){
         
         $categoty_id=$req->category;

        $questions=Question::where('is_active',1)->inRandomOrder()->take(16)->get();

        $progress=Answer::where('user_id',3)->count();

        // echo $progress;die;

        return $questions;
       
     }
        public function firstStart(){
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
        // dd($category);
        // echo $isCorrect;die;
        return view('reportDisplay')->with('isCorrect',$isCorrect)->with('category_id',$category);
    }

    public function postContact(Request $request)
    {
        $input=$request->all();
        
        $contact=new Contact();
        $contact->firstname=$input['firstname'];
        $contact->lastname=$input['lastname'];
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
}







 $curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://free-cricket-live-score.p.rapidapi.com/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'key' => 'ignor'
    ]),
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: free-cricket-live-score.p.rapidapi.com",
        "X-RapidAPI-Key: 3978d5d72amshdf31675d64e964ep1aeb27jsn4bb3a25730eb",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

$user_id = auth()->id();
$responseArray =json_decode($response, true);
// dd($responseArray);
foreach ($responseArray as $matchData) {
    $matchType=$matchData['match_type'];
$existMatch=Live::where('match_type',$matchType)->first();
if($existMatch==$matchData['match_type']){
$updateMatch->match_type=$matchData['match_type'];
$updateMatch->is_live=$matchData['is_live'];

$updateMatch->result=$matchData['result'];

$updateMatch->match_location=$matchData['match_location'];
$updateMatch->team_details=json_encode($matchData['team_details']);
$updateMatch->save();
}
else{
      $cricketMatch=new Live();
$cricketMatch->match_type=$matchData['match_type'];
$cricketMatch->is_live=$matchData['is_live'];

$cricketMatch->result=$matchData['result'];

$cricketMatch->match_location=$matchData['match_location'];

$cricketMatch->team_details=json_encode($matchData['team_details']);
$cricketMatch->save();
   
}
}




@foreach ($teamData as $team)
    <div>
        <h2>{{ $team['teamFullName'] }}</h2>
        <p>Team Short Name: {{ $team['teamShortName'] }}</p>
        <p>Team ID: {{ $team['teamID'] }}</p>

        <h3>Team Scores:</h3>
        @foreach ($team['teamScore'] as $score)
            <div>
                <p>Inning: {{ $score['inningNumber'] }}</p>
                <p>Batting Team: {{ $score['battingTeam'] }}</p>
                <p>Runs Scored: {{ $score['runsScored'] }}</p>
                <p>Wickets: {{ $score['wickets'] }}</p>
                <p>Overs: {{ $score['overs'] }}</p>
                <p>Run Rate: {{ $score['runRate'] }}</p>
                <!-- Add more fields as needed -->

                <!-- Example: Display a boolean value -->
                <p>Declared: {{ $score['declared'] ? 'Yes' : 'No' }}</p>
            </div>
        @endforeach
    </div>
@endforeach