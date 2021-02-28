<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name')->nullable()->unique('projects_name_unique');
            $table->text('introduction')->nullable();
            $table->timestamps();
            $table->text('goals')->nullable();
            $table->string('github')->nullable();
            $table->string('email')->nullable();
            $table->string('image_card')->nullable();
            $table->string('image_background')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
