<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id('match_id');
            $table->string('result');
            $table->string('match_location');
          $table->string('team_one_name'); 
        $table->string('team_one_flag');
        $table->string('team_one_score'); 
        $table->string('team_one_overs'); 
        $table->string('team_two_name'); 
        $table->string('team_two_flag');
        $table->string('team_two_score'); 
        $table->string('team_two_overs');

            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
