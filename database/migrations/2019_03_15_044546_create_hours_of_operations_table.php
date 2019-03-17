<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursOfOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours_of_operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('settings_id');
            $table->integer('day');
            $table->time('start');
            $table->time('end');
            $table->boolean('opened');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours_of_operations');
    }
}
