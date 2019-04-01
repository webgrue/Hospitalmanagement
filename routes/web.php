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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin', 'middleware'=>['auth','admin'] ],function(){

	Route::get('dashboard','AdminController@index')->name('dashboard');
});

//Doctor


Route::group(['as'=>'doctor.','prefix'=>'doctor','namespace'=>'Doctor', 'middleware'=>['auth','doctor'] ],function(){

	Route::get('dashboard','DoctorController@index')->name('dashboard');
});


//Reception


Route::group(['as'=>'reception.','prefix'=>'reception','namespace'=>'Reception', 'middleware'=>['auth','reception'] ],function(){

	Route::get('dashboard','ReceptionController@index')->name('dashboard');
});


//Labassistant


Route::group(['as'=>'lab.','prefix'=>'labassist','namespace'=>'Lab', 'middleware'=>['auth','lab'] ],function(){

	Route::get('dashboard','LabController@index')->name('dashboard');
});



//Employeer


Route::group(['as'=>'employeer.','prefix'=>'employeer','namespace'=>'Employee', 'middleware'=>['auth','employee'] ],function(){

	Route::get('dashboard','EmployeeController@index')->name('dashboard');
});







