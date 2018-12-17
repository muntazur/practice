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
Route::get('sayhello/{name}','hellocontroller@index');

Route::get('demo/{max}/{min?}',function($max,$min=0){
    echo "Max = ".$max."<br>";
    echo "Min = ".$min;

})->where(['price'=>"[0-9]+"]);

Route::get('/', function () {
    return view('welcome');
});
