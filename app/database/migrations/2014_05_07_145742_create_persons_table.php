<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create Persons Table
		Schema::create('persons', function(Blueprint $table)
		{
			// Primary Key
			$table->increments('id');

			// Fields
			$table->string('f_name');
			$table->string('m_initial');
			$table->string('l_name');
			$table->string('ssn')->nullable();
			$table->date('dob')->nullable();
			//Foreign Key to Person_type Table
			$table->integer('person_type_id');

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
		// Drop table
		Schema::drop('persons');
	}

}
