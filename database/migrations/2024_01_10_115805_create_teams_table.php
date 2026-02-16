<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
                $table->id('team_id');
 $table->string('match_id')->nullable();
        $table->string('team_one_name')->nullable();
            $table->string('team_one_flag')->nullable();
            $table->integer('team_one_score')->nullable();
            $table->integer('team_one_overs')->nullable();
            $table->string('team_two_name')->nullable();
            $table->string('team_two_flag')->nullable();
            $table->integer('team_two_score')->nullable();
            $table->integer('team_two_overs')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
