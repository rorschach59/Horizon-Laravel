<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_streamer')->unsigned();
            $table->string('planning_day');
            $table->integer('week');
            $table->integer('planning_year');
            $table->string('planning_month');
            $table->string('hours');
            $table->text('text');
            $table->text('image');
            $table->timestamps();
            $table->foreign('id_streamer')->references('id')->on('streamers')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planning');
    }
}
