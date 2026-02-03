<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Challenge_question;
use App\Models\challenge_question_option;
use App\Models\Question;
use Hash;
use Auth;

class QuestionController extends Controller
{


public function create()
    {
        return view('admin.question.add');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'question' => 'required|string',
            'choices' => 'required|string', // textarea input as a string
            'correctAnswer' => 'required|integer',
            'category'=>'required',
        ]);

           // Explode the choices into an array using the PHP_EOL (end of line) constant
        $choicesArray = explode(PHP_EOL, $data['choices']);

        // Remove any empty choices (extra line breaks, etc.)
        $choicesArray = array_filter($choicesArray);

        // Add the choices array to the data to be stored in the database
        $data['choices'] = $choicesArray;
$data['correctAnswer']=$data['correctAnswer']-1;

        Question::create($data);

        return redirect()->route('questions.create')->with('success', 'Question created successfully.');
    }








    public function getAddQuestion()
    {
        return view('admin.question.add');
    }

    public function postAddQuestion(Request $request)
    {
        $data=$request->all();

        $question=new Challenge_question();
        $question->code=$data['code'];
        $question->type=$data['type'];
        $question->modal_area=$data['modal_area'];
        $question->question=$data['question'];
        $question->answer=$data['answer'];
        $question->save();



        $option=$data['options'];
        $question_id=$question->id;

        foreach($option as $options)
        {
          $optn=new challenge_question_option();
          $optn->options=$options;
          $optn->challenge_question_id=$question_id;
          $optn->save();
        }


         $notification = array(
            'message' => 'Question and Options Added Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question/all')->with($notification);




    }

    public function getEditQuestion(Request $request)
    {
        $id=$request->id;

        $question=Challenge_question::where('challenge_question_id',$id)->first();

        $option=challenge_question_option::where('challenge_question_option_id',$id)->first();

        // echo $challenge_question_option;die;

        return view('admin.question.edit')->with('question',$question)->with('option',$option)->with('id',$id);
    }

    public function postEditQuestion(Request $request)
    {
        $id=$request->id;

        $data=$request->all();

        $question=Challenge_question::where('challenge_question_id',$id)->first();
        $question->code=$data['code'];
        $question->type=$data['type'];
        $question->modal_area=$data['modal_area'];
        $question->question=$data['question'];
        $question->answer=$data['answer'];
        $question->save();



        $option=$data['options'];

        // dd($option);die;

        
        $pluck_id=challenge_question_option::where('challenge_question_id',$id)->pluck('challenge_question_option_id');

        foreach($option as $options)
        {
          $optn=challenge_question_option::where('challenge_question_option_id',$pluck_id)->first();
          $optn->options=$options;
          $optn->challenge_question_id=$id;
          $optn->save();
        }



         $notification = array(
            'message' => 'Question and Options Updated Successfully', 
            'alert-type' => 'success'
           );


        return redirect('admin/question/all');


    }
    public function all()
    {
        return view('admin.question.all');
    }

  

    public function delete(Request $request)
    {
        $id=$request->id;
        $question=Challenge_question::where('challenge_question_id',$id)->delete();

        $notification = array(
            'message' => 'Question deleted Successfully', 
            'alert-type' => 'success'
           );



        return redirect('admin/question/all');
    }


    public function inactive(Request $request)
    {
        $id=$request->id;
        $question=Challenge_question::find($id);
        $question->is_active=0;
        $question->save();

        return redirect('admin/question/all');


    }


     public function active(Request $request)
    {
        $id=$request->id;
        $question=Challenge_question::find($id);
        $question->is_active=1;
        $question->save();

        return redirect('admin/question/all');


    }
 public function getQuestionAdd()
    {
        return view('admin.question.add');
    }

    public function postQuestionAdd(Request $request)
    {
        $input=$request->all();

         $choicesArray = explode(PHP_EOL, $input['choices']);

        $question=new Question();

        $question->category=$input['category'];
        $question->question=$input['question'];
        $question->type=$input['type'];
        $question->choices=$choicesArray;;
        $correctAns=$input['correctAnswer']-1;
        $question->correctAnswer=$correctAns;
        // $data['choices'] = $choicesArray;

        $question->save();

        $notification = array(
            'message' => ' Question Added Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question/all')->with($notification);

    }

   

    public function allData()
    {
        $question=Question::all();

        return DataTables::of($question)->make('true');
    }

    public function getUpdate(Request $request)
    {
        $id=$request->id;
        $question=Question::where('question_id',$id)->first();
        return view('admin.question.edit')->with('question',$question);
    }


    public function postUpdate(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $choicesArray = explode(PHP_EOL, $input['choices']);
     
        
       

        $question=Question::find($id);

        $question->category=$input['category'];
        $question->question=$input['question'];
        $question->type=$input['type'];
        $question->choices=$choicesArray;
        $correctAns=$input['correctAnswer']-1;
        $question->correctAnswer=$correctAns;
        
        $question->save();

        $notification = array(
            'message' => ' Question Update Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question/all')->with($notification);

    }

    public function isActive(Request $request)
    {
        $id=$request->id;
        $is_active=0;

        $question=Question::find($id);
        $question->is_active=$is_active;
        $question->save();

        $notification = array(
            'message' => ' Question Inactive Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question/all')->with($notification);


    }

    public function isInactive(Request $request)
    {
        $id=$request->id;
        $is_active=1;

        $question=Question::find($id);
        $question->is_active=$is_active;
        $question->save();
       $notification = array(
            'message' => ' Question Active Successfully', 
            'alert-type' => 'success'
           );

        return redirect('admin/question/all')->with($notification);


    }

    
}
