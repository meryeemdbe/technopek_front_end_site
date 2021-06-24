<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;



//********************** */ For changing languages ***********************

// Route::redirect('/', '/en') ;

// Route::group(['prefix'=> '{language}' ], function () { 
//     Route::get('/', function () {
//         return view('welcome');
//     })->name('welcome');
    
//    Auth::routes();
    
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
// });

//********************** */ For changing languages ***********************

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['middleware'=> 'PreventBackHistory'])->group(function(){
Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function () {

    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
});



    Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory' ]], function () {

        Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
        Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
    });
