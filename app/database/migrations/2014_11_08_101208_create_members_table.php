<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function($table)
        {
        	$table->increments('id');
       		$table->string('title');
	        $table->string('cell');
	        $table->string('tel');
	        $table->string('dob');
	        $table->string('initials');
	        $table->string('firstname');
	        $table->string('surname');
	    	$table->string('idnumber');
	  		$table->integer('introducer');
	  		$table->integer('bankid');
	  		$table->integer('userid');
	        $table->timestamps();
	        $table->integer('updated_by');
	        $table->integer('created_by');
	        $table->boolean('active');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('members');
	}

}
