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
    return view('sample');
});



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index');

Route::post('/registerConstituentOfficials', 'ConstituentInfosController@saveOfficials');
Route::post('/registerConstituents', 'ConstituentInfosController@saveConstituents');


Route::post('/submitComplaint', 'ComplaintFormController@saveComplaint');
Route::get('/showComplaintsSummary', 'ComplaintFormController@showComplaint');


