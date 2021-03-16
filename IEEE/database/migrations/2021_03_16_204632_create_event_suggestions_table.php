<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_suggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_org')->nullable();
            $table->string('event_type')->default('NA');
            $table->text('event_description');
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
        Schema::dropIfExists('event_suggestions');
    }
}
