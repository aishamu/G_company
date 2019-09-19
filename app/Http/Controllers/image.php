<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Employee;


class image extends Controller
{
  public function index()
  {
    $employees = DB::table('table_employees')->get();
    $data = DB::table('ajax_images')->get();
    return view('pages.img', compact('data'))->with('employees',$employees);
}

}
