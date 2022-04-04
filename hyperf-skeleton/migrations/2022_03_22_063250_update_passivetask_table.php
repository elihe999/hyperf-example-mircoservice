<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class UpdatePassivetaskTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('passive_task')) {
            echo "exist";
        } else {
            Schema::table('passive_task', function (Blueprint $table) {
                //
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('passive_task', function (Blueprint $table) {
            //
        });
    }
}
