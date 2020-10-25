<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//check milldleware and con
Route::get('about', function () {
    return view('welcome');
})->middleware("age");

Route::get("Contact",function(){
  return view("contact");
});
Route::get("User Details",function(){
  return view("About");
})->name("About");
//used Controller
Route::get("Home","ContractController@home");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
