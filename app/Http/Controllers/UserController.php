<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\User;
use App\Models\Question;
Use App\Models\Score;
Use App\Models\Answer;
use Hash;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function getUserAdd()
    {
        return view('admin/user/add');
    }
public function getresetPassword(){
     return view('auth.passwords.reset');
}
public function postReset(Request $request){
    $email=$request->email;
    $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

  $user=User::where('email',$email)->first();

    
if (!$user) {
    return redirect()->back()->withErrors(['email' => 'User not found.']);
}
        $user->update([
            'password' => bcrypt($request->password),
        ]);


        return redirect()->route('login')->with('success', 'Password updated successfully.');
}
    public function postUserAdd(Request $request)
    {

        $this->validate($request,User::$UserRule);

        $input=$request->all();

        $user=new User();
        $user->name=$input['name'];
        $user->email=$input['email'];
        $user->phone_no=$input['phone_no'];
        $user->age=$input['age'];
        $user->dob=$input['dob'];
        $user->password=Hash::make($request->password);

        $user->save();

        return view('admin/user/all');

    }

    public function getUserEdit(Request $request)
    {
        $id=$request->id;
        $user=User::where('id',$id)->first();

        return view('admin.user.edit')->with('user',$user)->with('id',$id);
    }

    public function postUserEdit(Request $request)
    {
        $id=$request->id;
        $input=$request->all();

        $user=User::find($id);
        $user->name=$input['name'];
        $user->email=$input['email'];
        $user->phone_no=$input['phone_no'];
        $user->age=$input['age'];
        $user->dob=$input['dob'];
        $user->password=Hash::make($request->password);

        $user->save();

        $notification = array(
            'message' => ' User updated Successfully', 
            'alert-type' => 'success'
           );

        return redirect('profile')->with($notification);

    }

    public function all()
    {
        return view('admin.user.all');
    }

    
    public function delete(Request $request)
    {
        $id=$request->id;
        $question=User::where('id',$id)->delete();

        $notification = array(
            'message' => 'User deleted Successfully', 
            'alert-type' => 'success'
           );



        return redirect('admin/user/all');
    }


    public function inactive(Request $request)
    {
        $id=$request->id;
        $question=User::find($id);
        $question->is_active=0;
        $question->save();

        return redirect('admin/user/all');


    }


     public function active(Request $request)
    {
        $id=$request->id;
        $question=User::find($id);
        $question->is_active=1;
        $question->save();

        return redirect('admin/user/all');


    }

 public function UserAll()
    {
        return view('admin.user.add');
    }

    public function allData()
    {
       $user=User::all();

       return DataTables::of($user)->make(true);

    }

    public function getChangePassword(Request $request)
    {
        $id=$request->id;

        return view('admin.user.changepassword')->with('id',$id);
    }

    public function postChangePassword(Request $request)
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

            $notification = array(
            'message' => 'Your Password updated Successfully', 
            'alert-type' => 'success'
           );

            return redirect('admin/user/all')->with($notification);

        }
        else
        {
           return redirect()->back();
        }

    }

    public function isActive(Request $request)
    {
        $id=$request->id;
        $is_active=0;

        $user=User::find($id);
        $user->is_active=$is_active;
        $user->save();


        $notification = array(
            'message' => ' User Active Successfully', 
            'alert-type' => 'success'
           );


        return redirect('admin/user/all')->with($notification);
    }

    public function isInactive(Request $request)
    {
        $id=$request->id;
        $is_active=1;

        $user=User::find($id);
        $user->is_active=$is_active;
        $user->save();


        $notification = array(
            'message' => ' User Inactive Successfully', 
            'alert-type' => 'success'
           );


        return redirect('admin/user/all')->with($notification);

    }

    public function getUpdate(Request $request)
    {
        $id=$request->id;
        $user=User::where('id',$id)->first();
        return view('admin.user.edit')->with('user',$user);
    }

    public function postUpdate(Request $request)
    {
        $id=$request->id;

        $input=$request->all();



        $user=User::find($id);
        $user->name=$input['name'];
        $user->email =$input['email'];
        $user->phone_no=$input['phone_no'];
        $user->dob=$input['dob'];
        $user->age=$input['age'];

        $user->save();

        $notification = array(
            'message' => ' User updated Successfully', 
            'alert-type' => 'success'
           );


        return redirect('admin/user/all')->with($notification);

    }

//     public function dashboard()
// {
//     $student = User::where('role_id', 2)->count();
//     $question = Question::count();
//     $current_month_count = Answer::whereMonth('created_at', Carbon::now()->month)
//         ->whereYear('created_at', Carbon::now()->year)
//         ->distinct('user_id')
//         ->count();

//     $currentYear = Carbon::now()->year;

//     $answers = Answer::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(DISTINCT user_id) as unique_count'))
//         ->whereYear('created_at', $currentYear)
//         ->groupBy(DB::raw('MONTH(created_at)'))
//         ->orderBy(DB::raw('MONTH(created_at)'))
//         ->get();

    


//         $months = [];
// $uniqueCounts = [];

// for ($i = 1; $i <= 12; $i++) {
//     $monthName = Carbon::create()->month($i)->format('F');
//     $months[] = $monthName;

//     // Check if there is data for the current month
//     $count = $answers->where('month', $i)->first()?->unique_count ?? 0;
//     $uniqueCounts[] = $count;
// }


//     $user = User::count();
//     $teacher = User::where('role_id', 3)->count();

//     $scoreCount = Score::whereMonth('created_at', Carbon::now()->month)
//         ->whereYear('created_at', Carbon::now()->year)
//         ->count();

//     return view('admin.dashboard', compact('student', 'question', 'user', 'teacher', 'current_month_count', 'months', 'uniqueCounts'));
// }


//   

// 


public function dashboard()
{
    $student = User::where('role_id', 2)->count();
    $question = Question::count();
    $current_month_count = Answer::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->distinct('user_id')
        ->count();

    $currentYear = Carbon::now()->year;
    $currentMonth = Carbon::now()->month;

    // Monthly data (for all months of the current year)
    $monthlyAnswers = Answer::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(DISTINCT user_id) as unique_count'))
        ->whereYear('created_at', $currentYear)
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->orderBy(DB::raw('MONTH(created_at)'))
        ->get();

    $months = [];
    $monthlyUniqueCounts = [];
    foreach ($monthlyAnswers as $answer) {
        $monthName = Carbon::create()->month($answer->month)->format('F');
        $months[] = $monthName;
        $monthlyUniqueCounts[] = $answer->unique_count;
    }

    // Weekly data for the current month only
    $weeklyAnswers = Answer::select(DB::raw('WEEK(created_at) as week'), DB::raw('COUNT(DISTINCT user_id) as unique_count'))
        ->whereYear('created_at', $currentYear)
        ->whereMonth('created_at', $currentMonth)  // Filter by current month
        ->groupBy(DB::raw('WEEK(created_at)'))
        ->orderBy(DB::raw('WEEK(created_at)'))
        ->get();

    $weeks = [];
    $weeklyUniqueCounts = [];
    foreach ($weeklyAnswers as $answer) {
        // Get the week range (start and end date) for the current week
        $weekStart = Carbon::now()->year($currentYear)->month($currentMonth)->week($answer->week)->startOfWeek()->format('M d');
        $weekEnd = Carbon::now()->year($currentYear)->month($currentMonth)->week($answer->week)->endOfWeek()->format('M d');
        $weeks[] = "{$weekStart} - {$weekEnd}";
        $weeklyUniqueCounts[] = $answer->unique_count;
    }

    // Other statistics (users, teachers, etc.)
    $user = User::count();
    $teacher = User::where('role_id', 3)->count();

    // Scores for the current month
    $scoreCount = Score::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();

    // Pass all the data to the view
    return view('admin.dashboard', compact(
        'student', 'question', 'user', 'teacher', 
        'current_month_count', 'months', 'monthlyUniqueCounts', 
        'weeks', 'weeklyUniqueCounts'
    ));
}



}
