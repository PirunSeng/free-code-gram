<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function imagePath() {
    $imagePath = ($this->image) ?  $this->image : 'no-image.png';
    return '/storage/' . $imagePath;
  }

  public function followers() {
    return $this->belongsToMany(User::class);
  }
}
