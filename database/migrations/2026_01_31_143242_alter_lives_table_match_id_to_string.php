<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterLivesTableMatchIdToString extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if id column exists, if not add it
        if (!Schema::hasColumn('lives', 'id')) {
            // Drop primary key if match_id is primary
            try {
                DB::statement('ALTER TABLE `lives` DROP PRIMARY KEY');
            } catch (\Exception $e) {
                // Primary key might not exist or be on different column
            }
            
            DB::statement('ALTER TABLE `lives` ADD COLUMN `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST');
        }
        
        // Change match_id to VARCHAR to support UUIDs from CricketData API
        // This works for both numeric IDs (Cricbuzz) and UUIDs (CricketData)
        DB::statement('ALTER TABLE `lives` MODIFY COLUMN `match_id` VARCHAR(255) NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lives', function (Blueprint $table) {
            // Drop the id column
            $table->dropColumn('id');
            
            // Change match_id back to bigInteger and make it primary
            $table->bigInteger('match_id')->nullable(false)->change();
            $table->primary('match_id');
        });
    }
}
