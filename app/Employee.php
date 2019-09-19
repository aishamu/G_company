<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{

  
  public function AjaxImage()
{
  return $this->belongsTo('App\AjaxImage');
}


}
