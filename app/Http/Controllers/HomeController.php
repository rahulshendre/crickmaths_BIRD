<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Challenge_question;
use App\Models\challenge_question_option;
use App\Models\Answer;


use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

 

     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getLogout(Request $request){

        Auth::logout();
        return redirect('login');
    }

  

    public function getQuestion()
    {
        $questions=Challenge_question::where('is_active',1)->with('option')->inRandomOrder()->take(1)->get();

        // echo $questions->option;die;

        return view('question', ['questions' => $questions]);
    }

    public function postAnswer(Request $request)
    {

                $this->validate($request,Answer::$AnswerRule);

        $input=$request->all();



        $is_correct=Challenge_question::where('challenge_question_id',$input['question_id'])->first();
        $correctAnswer=$is_correct->answer;

        $option=challenge_question_option::where('challenge_question_option_id',$input['option_id'])->first();
        $selectedOptionText=$option->option;

        $isCorrect = ($correctAnswer == $selectedOptionText) ? 'correct' : 'incorrect';


        

        $answer=new Answer();

        $answer->question_id=$input['question_id'];        
        $answer->option_id=$input['option_id'];

        $answer->answer=$isCorrect;
                        // echo $answer;die;



        $answer->save();

        return redirect('question');


    }

    public function getAdminChangePassword()
    {
        $user=Auth::User();
        $id=$user->id;
        return view('admin.changepassword')->with('id',$id);
    }

    public function postAdminChangePassword(Request $request)
    {
        $id=$request->id;
        $password=$request->password;
        $confirm_password=$request->confirm_password;

        if($password==$confirm_password)
        {
            $user=User::find($id);

            $hashPass = Hash::make($password);
            $user->password=$hashPass;
            $user->save();

            return redirect('admin/user/all');

        }
        else
        {
           return redirect()->back();
        }

    }
}
