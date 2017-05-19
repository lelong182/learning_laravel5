<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
  function posts()
  {
    return $this->hasManyThrough(Post::class, User::class);
  }
}
