<?php

use Illuminate\Support\Facades\Route;
use Laravel\Pennant\Feature;

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

// auth id 1 as admin
auth()->onceUsingId(1);


Route::get('/', function () {
    Feature::activate('new-design');
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (Feature::active('dashboard-v2')) {
        return redirect('/new-dahboard');
    }
    return 'dashboard';
});

Route::get('/new-dashboard', function () {
    return 'new-dashboard';
});