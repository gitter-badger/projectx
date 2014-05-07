<?php

class PersonExperienceTest extends TestCase {
	public function testThatTrueIsTrue()
	{
  	$this->assertTrue(true);
	}

	public function testTotalExperienceIsRequired()
	{
		$pe=new PersonExperience();
		$pe->person_id=2;
		$pe->experience_id=3;

		//this should not save
		$this->assertFalse($pe->save());

		//save errors
		$errors = $pe->errors()->all();

		//there should be one error
		$this->assertCount(1, $errors);

		//the total experience should not be null
		$this->assertEquals($errors[0], "The total experience years field is required.");
	}
}
