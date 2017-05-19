<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
  'post' => 'App\post',
  'video' => 'App\video'
]);

class tag extends Model
{
  public function posts()
  {
    return $this->morphedByMany('App\Post', 'taggable');
  }

  public function videos()
  {
    return $this->morphedByMany('App\Video', 'taggable');
  }
}
