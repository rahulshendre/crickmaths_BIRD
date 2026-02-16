<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge_question extends Model
{
   Public $primaryKey="challenge_question_id";


   public function option()
   {
      return $this->hasMany('App\Models\challenge_question_option','challenge_question_id','challenge_question_id');

   }

}

