<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public function postContactDetais(){
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->last_name=$request->last_name;
        $contact->email=$request->email;
        $contact->phone_no=$request->phone_no;
        $contact->message=$request->message;
        $contact->save();


    }
    use HasFactory;
}
