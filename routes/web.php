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
    return redirect('login');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('doctor', "DoctorController");
Route::resource('patient', "PatientController");
Route::get('patient/{id}', "PatientController@print")->name('patient.print');
Route::resource('sickness', "SicknessController");
Route::resource('drug', "DrugController");
Route::resource('prescription', "PrescriptionController");
Route::resource('records', "MedicalRecordController");
Route::get('dummy_graph', "DummyGraphController@index");
