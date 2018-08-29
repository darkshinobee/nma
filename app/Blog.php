<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  public function users()
  {
  	return $this->belongsTo('App\User');
  }
}