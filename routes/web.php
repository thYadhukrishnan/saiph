<?php

use App\Http\Controllers\Frontend\contactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\home1Controller;
use App\Http\Controllers\Frontend\aboutController;
use App\Http\Controllers\Frontend\faqController;
use App\Http\Controllers\Frontend\hotelController;
use App\Http\Controllers\Frontend\servicesController;
use App\Http\Controllers\Frontend\termsController;
use App\Http\Controllers\FrontendController;



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


//Route::post('/contactlist',[contactController::class,'store'])->name('contactlist');
//Route::post('save','FrontendController@save')->name('contact');
Route::get('/',[FrontendController::class,'home'])->name('home');
Route::post('save',[FrontendController::class,'save'])->name('contact');
Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('services',[FrontendController::class,'services'])->name('services');
Route::get('hotel',[FrontendController::class,'hotel'])->name('hotel');
Route::get('contact',[FrontendController::class,'contact'])->name('contact1');
Route::get('faq',[FrontendController::class,'faq'])->name('faq');
Route::get('terms',[FrontendController::class,'terms'])->name('terms');
Route::get('admin',[FrontendController::class,'admin'])->name('admin');
Route::post('login',[FrontendController::class,'login'])->name('login');
Route::get('display',[FrontendController::class,'display'])->name('display');
Route::get('logout',[FrontendController::class,'logout'])->name('logout');
Route::get('delete/{id}',[FrontendController::class,'delete'])->name('delete');
Route::get('welcome',[FrontendController::class,'welcome'])->name('welcome');
Route::get('image',[FrontendController::class,'image'])->name('image');
Route::post('imgupload',[FrontendController::class,'imgupload'])->name('imgupload');
Route::get('imgshow',[FrontendController::class,'imgshow'])->name('imgshow');
Route::get('imgdelete/{id}',[FrontendController::class,'imgdelete'])->name('imgdelete');
Route::get('imgupdate/{id}',[FrontendController::class,'imgupdate'])->name('imgupdate');
Route::post('imgedit',[FrontendController::class,'imgedit'])->name('imgedit');
