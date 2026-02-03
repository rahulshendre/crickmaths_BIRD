<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivematchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livematches', function (Blueprint $table) {
          $table->unsignedBigInteger('match_id')->unique();
            $table->unsignedBigInteger('series_id');
            $table->string('series_name');
            $table->string('match_desc');
            $table->string('match_format');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('state');
            $table->string('status');
            $table->unsignedBigInteger('curr_bat_team_id');
            $table->dateTime('series_start_date');
            $table->dateTime('series_end_date');
            $table->boolean('is_time_announced');
            $table->string('state_title');
            $table->unsignedBigInteger('venue_id');
            $table->string('ground');
            $table->string('city');
            $table->string('timezone');
            $table->string('latitude');
            $table->string('longitude');
            $table->unsignedBigInteger('team1_id');
            $table->string('team1_name');
            $table->string('team1_sname');
            $table->unsignedBigInteger('team1_image_id');
            $table->unsignedBigInteger('team2_id');
            $table->string('team2_name');
            $table->string('team2_sname');
            $table->unsignedBigInteger('team2_image_id');
            $table->unsignedInteger('team1_runs_inngs1');
            $table->unsignedInteger('team1_wickets_inngs1');
            $table->unsignedInteger('team1_runs_inngs2');
            $table->unsignedInteger('team1_wickets_inngs2');
            $table->unsignedInteger('team2_runs_inngs1');
            $table->unsignedInteger('team2_wickets_inngs1');
            $table->unsignedInteger('team2_runs_inngs2');
            $table->unsignedInteger('team2_wickets_inngs2');
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
        Schema::dropIfExists('livematches');
    }
}
