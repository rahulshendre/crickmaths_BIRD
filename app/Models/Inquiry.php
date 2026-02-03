<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    public static $RegisterRule=[
    'name'=>'required|max:40|min:2|regex:/^[a-zA-Z ]{2,40}$/',           
    'email'=>'required|unique:staff|max:40|regex:/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/',
    'phone_no'=>'required|numeric|digits_between:10,12',
    

    
   
];

}
