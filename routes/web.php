<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ResultController;
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

//Admin Routes
Route::prefix('/admin')->group(function(){
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
});
