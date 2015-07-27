<?php

class Speciality extends \Eloquent {
	protected $fillable = [];
	protected $table = 'specialities';

	public function promo()
	{
		return $this->hasMany('Promo');
	}

	public function doctor()
	{
		return $this->belongsToMany('Doctor');
	}
}