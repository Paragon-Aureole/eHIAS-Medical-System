<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
  protected $fillable = [
    'drugName', 'drugDescription'
  ];

  public function record()
  {
      return $this->belongsTo(Prescription::class);
  }
}
