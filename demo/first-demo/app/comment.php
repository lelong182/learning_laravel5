<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
  'post' => 'App\post',
  'video' => 'App\video'
]);

class comment extends Model
{
  function commentable()
  {
    return $this->morphTo();
  }
}
