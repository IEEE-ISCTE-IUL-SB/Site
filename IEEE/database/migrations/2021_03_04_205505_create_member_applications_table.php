<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_name');
            $table->string('phone_number', 20);
            $table->string('email');
            $table->string('student_number', 10);
            $table->string('student_degree');
            $table->text('what_is_ieee');
            $table->text('how_did_you_find_us');
            $table->text('reason_to_join');
            $table->string('availability');
            $table->text('value_add');
            $table->string('when_to_start');
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
        Schema::dropIfExists('member_applications');
    }
}
