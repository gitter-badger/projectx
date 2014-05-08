<?php
use LaravelBook\Ardent\Ardent;

class PersonExperience extends Ardent {
	protected $fillable = [];

	public static $rules = array(
		'total_experience_years' => 'required',
		'person_id' => 'required',
		'experience_id' => 'required'
	);
}
