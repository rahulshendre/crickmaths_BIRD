<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livematch extends Model
{
      protected $fillable = [
        'match_id',
        'is_live',
  'battingTeamName',
  'battingTeamShortName',
  'battingTeamID',
  'runsScored',
  'wickets',
  'overs',
  'runRate',
  'runrateprojection',
  'nextbatsmans',
  'batting' ,
  'bowling',
  'live_id',
  'extras',
  'field list',
  'fow',
  'total',
    ];

    protected $casts = [
  'runrateprojection' => 'json',
  'nextbatsmans'=> 'json',
  'batting'=> 'json',
  'bowling'=> 'json',
  'extras'=> 'json',
  'fow'=> 'json',
  'total'=> 'json',
    ];
}