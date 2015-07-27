<?php

class Doctor extends \Eloquent {
	protected $fillable = [];
	protected $table = 'doctors';

	public function speciality()
	{
		return $this->belongsToMany('Speciality');
	}
}