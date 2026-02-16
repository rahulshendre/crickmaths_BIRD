<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterLivematchesTableMatchIdToString extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Change match_id to VARCHAR(255) to support UUIDs from CricketData API
        // Preserves unique constraint, works for both numeric IDs (Cricbuzz) and UUIDs (CricketData)
        DB::statement('ALTER TABLE `livematches` MODIFY COLUMN `match_id` VARCHAR(255) NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livematches', function (Blueprint $table) {
            $table->unsignedBigInteger('match_id')->unique()->change();
        });
    }
}
