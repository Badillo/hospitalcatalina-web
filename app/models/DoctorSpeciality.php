<?php

class DoctorSpeciality extends \Eloquent {
	protected $fillable = [];
	protected $table = 'doctor_specialities';

	public function speciality()
	{
		return $this->belongsTo('Speciality');
	}

	public function doctor()
	{
		return $this->belongsTo('Doctor');
	}
}