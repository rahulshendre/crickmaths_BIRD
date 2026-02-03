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
        // Use raw SQL to safely alter the table structure
        DB::statement('ALTER TABLE `lives` DROP PRIMARY KEY');
        DB::statement('ALTER TABLE `lives` ADD COLUMN `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST');
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
