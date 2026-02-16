<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\Level;

use Hash;
use Auth;


class LevelController extends Controller
{
   public function getLevelAdd()
   {
     return view('admin.level.add');
   }

   public function postLevelAdd(Request $request)
   {
     $input=$request->all();

     $level=New Level();

     $level->level_name=$input['level_name'];
     $level->save();

     return redirect('admin/level/all');

   }

   public function getLevelEdit(Request $request)
   {
      $id=$request->id;

      $level=Level::where('level_id',$id)->first();

      // echo $level;die;

      return view('admin.level.edit')->with('level',$level)->with('id',$id);
   }

   public function postLevelEdit(Request $request)
   {
     $id=$request->id;
     $input=$request->all();

     $level=Level::where('level_id',$id)->first();
     $level->level_name=$input['level_name'];
     $level->save();

     return redirect('admin/level/all');
   }

   public function all()
   {
    return view('admin.level.all');
   }

   public function allData()
   {
     $level=Level::all();
     return DataTables::of($level)->make(true);
   }

     public function inactive(Request $request)
    {
        $id=$request->id;
        $level=Level::find($id);
        $level->is_active=0;
        $level->save();

        return redirect('admin/level/all');


    }


     public function active(Request $request)
    {
        $id=$request->id;
        $level=Level::find($id);
        $level->is_active=1;

        $level->save();

        return redirect('admin/level/all');


    }


}
