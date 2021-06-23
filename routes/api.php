<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\Aset_TakingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);





Route::get('employee','Admin\API\Api_Employee@index');
Route::get('/employee/{nik}','Admin\API\Api_Employee@show');



Route::get('suratcuti','Admin\API\Api_Suratcuti@index');
Route::get('/suratcuti/{nik}','Admin\API\Api_Suratcuti@show');




Route::get('absent','Admin\API\Api_Absent@index');
Route::get('/absent/{nik}','Admin\API\Api_Absent@show');





//FINANCE SECTION

Route::get('aset_taking', 'API\Vw_Aset_TakingController@getAllAset_Taking');
Route::get('aset_taking/{id}', 'API\Vw_Aset_TakingController@getAset_Taking');
Route::post('aset_taking', [Aset_TakingController::class, 'createAset_Taking']);
// Route::get('aset_takin',[Aset_TakingController::Class, ''])

Route::get('resumeaset', 'API\ResumeAsetController@getAllResumeAset');


//Aset Taking Resume On Table

Route::get('aset_taking_resume', 'API\AsetTakingResumeController@getAllAsetTakingResume');
// Route::get('aset_taking_resume_pending', 'API\AsetTakingResumeController@getAllResumeAsetPending');
Route::get('aset_taking_resume/{id}', 'API\AsetTakingResumeController@getAsetTakingResume');

