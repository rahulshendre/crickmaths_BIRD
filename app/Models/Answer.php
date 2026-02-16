<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['questionId', 'selectedValue', 'isCorrect','user_id','answer','category'];

Public $primaryKey="id";
}
