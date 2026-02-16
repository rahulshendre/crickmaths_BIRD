<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Service;
use App\Models\Inquiry;

use Hash;
use Auth;


class InquiryController extends Controller
{
    public function getInquiryAdd()
    {
        return view('admin.inquiry.add');
    }

    public function postInquiryAdd(Request $request)
    {


        $this->validate($request,Inquiry::$RegisterRule);

        $input=$request->all();

        // dd($input);die;

        $inquiry=new Inquiry();

        $inquiry->name=$input['name'];
        $inquiry->phone_no=$input['phone_no'];
        $inquiry->email=$input['email'];
        $inquiry->message=$input['message'];
        $inquiry->save();

        return redirect('admin/inquiry/all');
    }

    public function all()
    {
        return view('admin.inquiry.all');
    }

    public function allData()
    {
        $inquiry=Inquiry::all();

        return DataTables::of($inquiry)->make(true);
    }

    public function delete(Request $request)
    {
        $id=$request->id;

        $inquiry=Inquiry::where('id',$id)->delete();

        return redirect('admin/inquiry/all');


    }
}
