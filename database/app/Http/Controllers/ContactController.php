<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DataTables;
use App\Service;
use App\Models\Challenge_question;
use App\Models\challenge_question_option;
use App\Models\Contact;
use Hash;
use Auth;

class ContactController extends Controller
{

   public function postContactDetails(Request $request){
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->last_name=$request->last_name;
        $contact->email=$request->email;
        $contact->phone_no=$request->phone_no;
        $contact->message=$request->message;
        $contact->save();
    }




    public function all()
    {
        return view('admin.contact.all');
    }

    public function allData()
    {
      $contact = Contact::orderBy('id', 'desc')->get();

       return DataTables::of($contact)->make(true);
    }
}
