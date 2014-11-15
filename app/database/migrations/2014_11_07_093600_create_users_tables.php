<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('users', function ($table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->smallInteger('created_by');
            $table->smallInteger('update_by');
            $table->string('username', 128)->unique();
            $table->string('password', 60);
            $table->smallInteger('role')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->rememberToken();
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
