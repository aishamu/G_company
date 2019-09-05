<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\AjaxImage;
use App\Models\User;

class AjaxImageUploadController extends Controller
{
  public function ajaxImageUpload()
  {
    return view('ajaxImageUpload');
  }


  /**
   * Show the application ajaxImageUploadPost.
   *
   * @return \Illuminate\Http\Response
   */
  public function ajaxImageUploadPost(Request $request)
  {
    $validator = Validator::make($request->all(), [
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);


    if ($validator->passes()) {


      $input = $request->all();
      $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
      $request->image->move(public_path('images'), $input['image']);


      AjaxImage::create($input);


      return view("pages.img");
    }


    return response()->json(['error'=>$validator->errors()->all()]);
  }


  public function index()
  {
      $users=User::all();
       return view('pages.img',['users'=> $users]);
  }


}
