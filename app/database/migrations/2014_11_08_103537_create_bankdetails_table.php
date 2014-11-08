<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bankdetails', function($table)
        {
        	$table->increments('id');
       		$table->string('bankname');
	        $table->string('branchname');
	        $table->string('branchcode');
	        $table->string('accnumber');
	  		$table->integer('memberid');
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
		Schema::drop('bankdetails');
	}

}
