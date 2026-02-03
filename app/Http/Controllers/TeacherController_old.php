<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Scoreboard;
use Hash;
use Auth;

class TeacherController extends Controller
{

public function endpointScore(Request $request){

    $class=$request->class;
    $classList=Student::where('class',$class)->get();

return $classList;
}


    public function getAddteacher(Request $request){
        return view('admin.teacher.add');
    }
   public function addteacher(Request $request){
 $existingTeacher = User::where('email', $request->email)->first();
    if ($existingTeacher) {
        return redirect()->back()->withErrors(['email' => 'Teacher/User Already exist.']);
    }
    $teacher=new User();

    $teacher->name=$request->name;
    $teacher->email=$request->email;
    $teacher->phone_no=$request->phone_no;
    $teacher->role_id=$request->role_id;
    $teacher->school_name=$request->school_name;
    $teacher->password=Hash::make($request->password);
    $teacher->save();
$notification = array(
            'message' => 'Teacher Added Successfully', 
            'alert-type' => 'success'
           );

    return redirect('admin/user/all')->with($notification);

   }


   public function teacherGame(){


    return view('teacher_game.teacher');
   }


   public function studentDetail(Request $request){

$std=new Student();
$std->name=$request->name;
$std->class=$request->class;
$std->teacher_id=$request->teacher_id;
$std->save();
$teacher_id=$std->teacher_id;
$std_id=$std->id;
session(['teacher_id' => $teacher_id, 'std_id' => $std_id]);
return redirect()->route('after-start');
   }




//    public function scoreBoard(Request $request){
 
//     $score=Student::find($request->std_id);
//     $score->score=$request->score;
//     $score->question_atempt=$request->noQuestion;
//     $score->correct_question=$request->correct;
//     $score->save();

//     return $score;
   
// }


   public function scoreBoard(Request $request){
    
    $user = Auth::user();
    
    $score = new Scoreboard();
    $score->user_id = $user->id;
    $score->score = $request->score;
    $score->question_atempt = $request->noQuestion;
    $score->correct_question = $request->correct;
    $score->save();
   
   }

}