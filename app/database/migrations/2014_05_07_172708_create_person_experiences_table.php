<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create person_experiences table
		Schema::create('person_experiences', function(Blueprint $table)
		{
			//Primary Key
			$table->increments('id');

			//Fields
			$table->integer('total_experience_years');
			//Foreign Key to persons table
			$table->integer('person_id');
			//Foreign Key to experiences table
			$table->integer('experience_id');

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
		//Drop Table
		Schema::drop('persons_experience');
	}

}
