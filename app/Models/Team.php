<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
   protected $fillable = [
'match_id',
    'team_one_name',
        'team_one_flag',
        'team_one_score',
        'team_one_overs',
        'team_two_name',
        'team_two_flag',
        'team_two_score',
        'team_two_overs',];
           
          public function live()
    {
        return $this->belongsTo(Live::class);
    }

    public function cricketMatch()
    {
        return $this->belongsTo(CricketMatch::class);
    }
}
