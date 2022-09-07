<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\Home::class,'index'])->name('home');
Route::get('about', [App\Http\Controllers\about::class,'index'])->name('abouts');
Route::get('resume', [App\Http\Controllers\resume::class,'index'])->name('resumes');
Route::get('skill', [App\Http\Controllers\skill::class,'index'])->name('skills');
Route::get('portolio', [App\Http\Controllers\portofolio::class,'index'])->name('portofolios');
Route::get('contact', [App\Http\Controllers\contact::class,'index'])->name('contacts');
Route::post('contact', [App\Http\Controllers\contact::class,'sendMail']);
