<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sickness extends Model
{
  protected $fillable = [
    'sicknessName', 'sicknessDescription'
  ];

  public function record()
  {
      return $this->hasMany(MedicalRecord::class);
  }
  public function prescription()
  {
      return $this->belongsTo(Prescription::class);
  }
  public function referral()
  {
      return $this->belongsTo(Referral::class);
  }
}
