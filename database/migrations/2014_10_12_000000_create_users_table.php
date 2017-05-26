<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('user_type');
            $table->text('name_file');
            $table->text('extension');
            $table->text('weight');
            $table->text('pseudonym');
            $table->text('path_to_file');
            $table->string('name');
            $table->text('teacher_id');
            $table->text('kurs_id');
            $table->text('group_id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
