<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    function passport()
    {
      return $this->hasOne(Passport::class);
    }

    function mobiles()
    {
      return $this->hasMany(Mobile::class);
    }

    function roles()
    {
      return $this->belongsToMany(Role::class);
    }
}
