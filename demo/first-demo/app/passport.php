<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    function user()
    {
      return $this->belongsTo(User::class);
    }
}
