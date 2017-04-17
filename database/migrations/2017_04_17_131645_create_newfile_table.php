<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newfiles', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->text('title_file');
            $table->text('kurs');
            $table->text('group');
            $table->text('subject');
            $table->text('name_file');
            $table->text('extension');
            $table->text('weight');
            $table->text('pseudonym');
            $table->text('path_to_file');
            $table->text('description')->nullable();
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
        Schema::drop('newfiles');
    }
}
