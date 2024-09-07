<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin',function(){
//     return view('admin.home');
// });

Route::get('/admin', [HomeController::class, 'index']);