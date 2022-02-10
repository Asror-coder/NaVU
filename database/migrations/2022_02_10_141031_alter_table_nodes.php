<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableNodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nodes', function (Blueprint $table) {
            $table->foreignId('simulation_1')->nullable()->references('id')->on('crowd_status')->constrained()->default(1);
            $table->foreignId('simulation_2')->nullable()->references('id')->on('crowd_status')->constrained()->default(1);
            $table->foreignId('simulation_3')->nullable()->references('id')->on('crowd_status')->constrained()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nodes', function (Blueprint $table) {
            $table->dropColumn('simulation_1');
            $table->dropColumn('simulation_2');
            $table->dropColumn('simulation_3');
        });
    }
}
