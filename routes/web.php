<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\TimeController;
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

// Route::get('/',[PageController::class,'home']);
Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/games',[PageController::class,'games'])->name('our_games');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/privacy policy',[PageController::class,'privacy'])->name('privacy_policy');
Route::get('/terms & conditions',[PageController::class,'terms'])->name('user_terms');
Route::get('/login',[PageController::class,'login'])->name('login');
//login user
Route::post('/users/authenticate',[PageController::class,'authenticate'])->name('auth');
//logout user
Route::post('/logout',[PageController::class,'logout']);

//Admin Routes
Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/',[PageController::class,'index'])->name('index');
     //Routes for Games
     Route::prefix('/games')->group(function(){
        //Display Games
        Route::get('/',[GameController::class,'index'])->name('games');
        //Add games
        Route::get('/create',[GameController::class,'create'])->name('add-game');
        //Store games
        Route::post('/store',[GameController::class,'store'])->name('store-game');
        //Edit games
        Route::get('/{id}',[GameController::class,'edit'])->name('edit-game');
        //Update games
        Route::put('/update/{id}',[GameController::class,'update'])->name('update-game');
        //Delete games
        Route::delete('/delete/{id}',[GameController::class,'destroy'])->name('delete-game');
    });
     //Routes for time
     Route::prefix('/time')->group(function(){
        //Display time
        Route::get('/',[TimeController::class,'index'])->name('timing');
        //Add time
        Route::get('/create',[TimeController::class,'create'])->name('add-time');
        //Store time
        Route::post('/store',[TimeController::class,'store'])->name('store-time');
        //Edit time
        Route::get('/{id}',[TimeController::class,'edit'])->name('edit-time');
        //Update time
        Route::put('/update/{id}',[TimeController::class,'update'])->name('update-time');
        //Delete time
        Route::delete('/delete/{id}',[TimeController::class,'destroy'])->name('delete-time');
    });
     //Routes for result
     Route::prefix('/result')->group(function(){
        //Display result
        Route::get('/',[ResultController::class,'index'])->name('results');
        //Add result
        Route::get('/create',[ResultController::class,'create'])->name('add-result');
        //Store result
        Route::post('/store',[ResultController::class,'store'])->name('store-result');
        //Edit result
        Route::get('/{id}',[ResultController::class,'edit'])->name('edit-result');
        //Update result
        Route::put('/update/{id}',[ResultController::class,'update'])->name('update-result');
        //Delete result
        Route::delete('/delete/{id}',[ResultController::class,'destroy'])->name('delete-result');
    });
     //Routes for privacy
     Route::prefix('/privacy')->group(function(){
        //Display privacy
        Route::get('/',[PrivacyController::class,'index'])->name('privacy');
        //Add privacy
        Route::get('/create',[PrivacyController::class,'create'])->name('add-privacy');
        //Store privacy
        Route::post('/store',[PrivacyController::class,'store'])->name('store-privacy');
        //Edit privacy
        Route::get('/{id}',[PrivacyController::class,'edit'])->name('edit-privacy');
        //Update privacy
        Route::put('/update/{id}',[PrivacyController::class,'update'])->name('update-privacy');
        //Delete privacy
        Route::delete('/delete/{id}',[PrivacyController::class,'destroy'])->name('delete-privacy');
    });
     //Routes for terms
     Route::prefix('/terms')->group(function(){
        //Display terms
        Route::get('/',[TermsController::class,'index'])->name('terms');
        //Add terms
        Route::get('/create',[TermsController::class,'create'])->name('add-terms');
        //Store terms
        Route::post('/store',[TermsController::class,'store'])->name('store-terms');
        //Edit terms
        Route::get('/{id}',[TermsController::class,'edit'])->name('edit-terms');
        //Update terms
        Route::put('/update/{id}',[TermsController::class,'update'])->name('update-terms');
        //Delete terms
        Route::delete('/delete/{id}',[TermsController::class,'destroy'])->name('delete-terms');
    });
});
