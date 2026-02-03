<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\Rank;
use App\Models\Answer;


class RankController extends Controller
{
    public function all(Request $request)
    {
        $id=$request->id;
        return view('admin.rank.all')->with('id',$id);
    }

    public function allData(Request $request)
    {
        $id=$request->id;

        

        $rank=Answer::where('user_id',$id)->get();

        return DataTables::of($rank)->make(true);
    }
}
