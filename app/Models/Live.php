<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
     protected $fillable = [
        'user_id',
        'type',
        'match_type',
        'match_id',
        'result',
        'is_live',
        'team_details',
        'match_location',
        'team_one_name',
        'team_one_flag',
        'team_one_score',
        'team_one_overs',
        'team_two_name',
        'team_two_flag',
        'team_two_score',
        'team_two_overs',
    ];
    protected $casts = [
        'team_details' => 'array',
    ];

    public function teamDetails()
    {
        return $this->hasMany('App\Models\Livematch','live_id','live_id');
    }
}
