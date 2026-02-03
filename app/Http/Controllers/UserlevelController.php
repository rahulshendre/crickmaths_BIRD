<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\Question_category;
use App\Models\UserLevel;
use App\Models\Level;



use Hash;
use Auth;

class UserlevelController extends Controller
{
    public function getUserLevelAdd()
    {
        $category=Question_category::where('is_active',1)->get();
        $level=Level::where('is_active',1)->get();

        // echo $level;die;

        return view('admin.userLevel.add')->with('category',$category)->with('level',$level);
    }

    public function postUserLevelAdd(Request $request)
    {
        $input=$request->all();

        $userlevel=new UserLevel();

        $userlevel->category_id=$input['category_id'];
        $userlevel->level_id=$input['level_id'];
        $userlevel->user_id=$input['user_id'];

        $userlevel->save();

        return redirect('admin/user-level/view');

    }

    public function getUserLevelEdit(Request $request)
    {
        $id=$request->id;

        return view('admin.userLevel.edit')->with('id',$id);
    }

    public function postUserLevelEdit(Request $request)
    {

        $input=$request->all();

        $userlevel=UserLevel::find($user_level_id);

        $userlevel->category_id=$input['category_id'];
        $userlevel->level_id=$input['level_id'];
        $userlevel->user_id=$input['user_id'];

        $userlevel->save();

        return redirect('admin/user-level/view');
    }

    public function all()
    {
        return view('admin.userLevel.all');
    }

    public function allData()
    {
       $userLevel=UserLevel::all();

       return DataTables::of($userLevel)->make(true);
    }
}
