<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/in', function () {
    return view('index');
});
Route::post('/in', 'input@show');

Route::get('/options', function () {
    return view('pages.options');
});



Route::get('ajaxImageUpload', ['uses'=>'AjaxImageUploadController@ajaxImageUpload']);
Route::post('ajaxImageUpload', ['as'=>'ajaxImageUpload','uses'=>'AjaxImageUploadController@ajaxImageUploadPost']);

//Route::get('/img', function () {
  //  return view('pages.img');
//});

Route::get('/imgg', 'image@index');


Route::get('/card', function () {
    return view('pages.card');
});

Route::post('/ch', function () {
    return view('pages.check');
});


Route::get('/import_excel', 'ImportExcelController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/img', 'AjaxImageUploadController@index')->name('home');


Route::post('/message', 'MessageControl@import');
