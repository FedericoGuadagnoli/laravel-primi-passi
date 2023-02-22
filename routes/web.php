<?php

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
    $eldenRing = ['https://th.bing.com/th/id/R.7b2963058d0ca307f45a422a678cb66c?rik=Lw4otSpQDhjv%2fw&pid=ImgRaw&r=0', 'Welcome to the magnificent world of'];



    return view('home', compact('eldenRing'));
});
