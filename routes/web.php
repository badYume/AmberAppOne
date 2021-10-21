<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubjectController;

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

Route::get('/subject/create',[SubjectController::class,'create'])->name('create_subject_view');

Route::get('/subject',[SubjectController::class,'index'])->name('subject_view');

Route::DELETE('/subject/{id}',[SubjectController::class,'destroy'])->name('subject_destroy');

Route::POST('/subject/create',[SubjectController::class,'createRequest'])->name('create_subject_request');

Route::resource('admin','App\Http\Controllers\AdminController');
