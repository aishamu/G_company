<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class input extends Controller
{
  public function show(Request $request){
    print_r($request->input('name'));
}
}
?>
