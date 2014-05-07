<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('person_addresses', function(Blueprint $table){
			// Primary Key
			$table->increments('id');

			// Fields
			$table->integer('person_id');
			$table->integer('address_id');
			//Foreign Key to address_type Table
			$table->integer('address_type_id');


			//timestamp
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
		// Drop Table
		Schema::drop('person_addresses');
	}

}
