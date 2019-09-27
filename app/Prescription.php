<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
	protected $fillable =[

    'case_id',
	'drug_id',
	'quantity',
	'user_id',

	];

	public function drug(){
		return $this->hasOne(Drug::class);
	}
	public function case(){
		return $this->hasMany(Sickness::class);
	}

}
