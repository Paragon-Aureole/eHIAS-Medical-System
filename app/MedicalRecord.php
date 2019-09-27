<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable= [
    	'patient_id',
'case_id',
'user_id',
    ];

    public function patient(){
      return $this->belongsTo(Patient::class);
    }
    public function case(){
      return $this->belongsTo(Sickness::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function referral(){
       return $this->belongsTo(Referral::class);
    }




}
