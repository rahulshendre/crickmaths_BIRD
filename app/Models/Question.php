<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
        Public $primaryKey='question_id';
    protected $fillable = ['question', 'choices', 'correctAnswer','category'];

    protected $casts = [
        'choices' => 'array',
    ];
}
