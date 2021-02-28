<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rows', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('data_type_id')->index('data_rows_data_type_id_foreign');
            $table->string('field');
            $table->string('type');
            $table->string('display_name');
            $table->tinyInteger('required')->default(0);
            $table->tinyInteger('browse')->default(1);
            $table->tinyInteger('read')->default(1);
            $table->tinyInteger('edit')->default(1);
            $table->tinyInteger('add')->default(1);
            $table->tinyInteger('delete')->default(1);
            $table->text('details')->nullable();
            $table->integer('order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_rows');
    }
}
