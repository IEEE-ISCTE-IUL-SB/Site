<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name');
            $table->string('event_description', 1500)->nullable();
            $table->date('event_date');
            $table->timestamps();
            $table->string('image1');
            $table->string('image1_description', 500);
            $table->string('image2')->nullable();
            $table->string('image2_description')->nullable();
            $table->string('image3')->nullable();
            $table->string('image3_description')->nullable();
            $table->time('event_time');
            $table->string('event_location');
            $table->tinyInteger('highlighted')->default(0);
            $table->string('registration_link', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
