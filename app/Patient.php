<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    'patient_lastname',
'patient_middlename',
'patient_firstname',
'patient_gender',
'patient_civstat',
'patient_birthday',
'patient_age',
'patient_barangay',
'patient_city',
'patient_province',
'patient_contact',
'patient_height',
'patient_weight',
'patient_bp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function record()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
