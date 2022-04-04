<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class UpdatePushlogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('task_push_log')) {
            echo "exist";
        } else {
            Schema::create('task_push_log', function (Blueprint $table) {
                // 将字段的长度修改为 50
                $table->string('dt', 20)->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('task_push_log', function (Blueprint $table) {
            //
        });
    }
}
