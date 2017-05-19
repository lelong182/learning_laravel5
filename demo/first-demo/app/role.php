<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
  function users()
  {
    return $this->belongsToMany(User::class)->withTimestamps();
  }
}
