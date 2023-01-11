<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
});


// ROUTE SISWA 
Route::get('/siswa', function () {
    return view('pages.siswa.dashboard');
});
Route::get('/score', function () {
    return view('pages.siswa.score');
});
// AKHIR SISWA


// WALIKELAS
Route::get('/walikelas/dashboard', function () {
    return view('pages.walikelas.dashboard');
});
Route::get('/walikelas/students', function () {
    return view('pages.walikelas.students');
});
// AKHIR WALIKELAS


Route::get('/login', function () {
    return view('login');
});