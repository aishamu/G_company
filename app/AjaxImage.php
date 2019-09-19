<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AjaxImage extends Model
{
   protected $fillable = [
        'title', 'image'
    ];

   public function emplyees()
  {
     return $this->hasMany('App\Employee');
  }

  }
