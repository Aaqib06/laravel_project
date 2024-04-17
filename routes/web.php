<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('register');
});
route::get('/index',[HomeController::class,'index']);
route::get('register',[HomeController::class,'register']);
route::post('register',[HomeController::class,'register']);