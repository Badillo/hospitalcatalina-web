<?php

class Doctor extends \Eloquent {
	protected $fillable = [];
	protected $table = 'doctors';

	public function doctor_speciality()
	{
		return $this->belongsToMany('Speciality');
	}
}