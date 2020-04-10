<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  // allow sending any params/fields.
  // To be checked how to allow only specific fields/params.
  protected $guarded = [];

  public function user() {
    return $this->belongsTo(User::class);
  }
}
