<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable = [
        'case_id',
    	'user_id',
		'description',
		'referralDoctorName',
		'referralDoctorContactNumber',
    ];

    public function case()
    {
        return $this->belongsTo(Sickness::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function record(){
       return $this->hasOne(MedicalRecord::class);
    }
}
