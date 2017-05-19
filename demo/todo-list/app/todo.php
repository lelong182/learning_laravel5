<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
  function user()
  {
    return $this->belongsTo(User::class);
  }

  function getBodyAttribute($value)
  {
    return ucfirst($value);
  }

  function setBodyAttribute($value)
  {
    return $this->attributes['body'] = strtolower($value);
  }

  function getTitleAttribute($value)
  {
    return ucfirst($value);
  }

  function setTitleAttribute($value)
  {
    return $this->attributes['title'] = strtolower($value);
  }
}
