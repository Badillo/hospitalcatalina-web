<?php

class Promo extends \Eloquent {
	protected $fillable = [];
	protected $table = 'promos';

	public function specialities()
	{
		return $this->belongsTo('Speciality');
	}
}