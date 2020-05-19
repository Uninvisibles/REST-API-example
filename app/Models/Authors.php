<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{

  public function books() {
      return $this->hasMany('App\Models\Books');
    }

}
