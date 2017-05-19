<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
  function comments()
  {
    return $this->morphMany('App\comment', 'commentable');
  }

  function tags()
  {
    return $this->morphToMany('App\tag', 'taggable');
  }
}
