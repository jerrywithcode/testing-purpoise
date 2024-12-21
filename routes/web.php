<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Workercontroller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GarmentController;

Route::get('data-get',[DataController::class,'dataGet'])->name('user-data');


Route::view('/','userHome')->name('user-home')->middleware('groupMiddleware');

Route::prefix('/user')->group(function () {
Route::get('about',[UserController::class,'getAbout'])->name('user-about');
Route::get('gallary',[UserController::class,'getGallary'])->name('user-gallary');
Route::get('contact',[UserController::class,'getContact'])->name('user-contact');
Route::post('form',[UserController::class,'getform'])->name('user-form');
});




Route::get('students',[StudentController::class,'student'])->name('students');
Route::get('json',[StudentController::class,'jsonDaata'])->name('jsonDaata');
Route::get('result',[StudentController::class,'resultData'])->name('resultData');





Route::view('/datasession','datasession');
Route::get('logout',[UserController::class,'sessionof'])->name('logout');

Route::view('/upload','upload');
Route::post('/upload',[UploadController::class,'store']);



// workers add view
Route::get('worker',[Workercontroller::class,'getData']);

Route::post('add-worker',[Workercontroller::class,'addWorker'])->name('add-workers');








// public data show edit update delete


// Route::get('public',[PublicController::class,'public']);



// garment route
Route::get('garments',[GarmentController::class,'index'])->name('garments');
Route::post('add/public',[GarmentController::class,'addPublic']);

