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
Route::get('/siswa/dashboard', function () {
    return view('pages.siswa.dashboard');
});
Route::get('/siswa/score', function () {
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

//ADMIN 
Route::get('/admin/dashboard',function(){
    return view('pages.admin.dashboard');
});
Route::get('/admin/masterkelas',function(){
    return view('pages.admin.MasterKelas');
});
Route::get('/admin/masterscore',function(){
    return view('pages.admin.MasterScore');
});
//AKHIR ADMIN 


Route::get('/login', function () {
    return view('login');
});