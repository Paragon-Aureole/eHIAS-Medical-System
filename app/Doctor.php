<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
      'DoctorName', 'PRC_License'
    ];

    
    public function referral()
    {
        return $this->hasMany(Sickness::class);
    }
}
