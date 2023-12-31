<?php

use App\Http\Controllers\companyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\jobPositionController;
use App\Http\Controllers\JobStageController;
use App\Http\Controllers\recruiterController;
use App\Models\jobStage;
use App\Models\recruiter;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('job-position',jobPositionController::class);
Route::resource('job-category',JobCategoryController::class);
Route::resource('company', companyController::class);
Route::resource('job', JobController::class);
Route::resource('jobStage', JobStageController::class);
Route::resource('recruiter',recruiterController::class);
Route::resource('jobApplication', JobApplicationController::class);
