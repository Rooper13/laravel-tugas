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
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('blog', function (){
        return view ('about');
});

Route:: resource('buku',Buku2Controller::class);


Route::get('/buku4/{nomer}', function($nomer){
    return 'STIKI Perpus' . $nomer;
});


Route::get('/buku5/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});


Route::prefix('admin')->get('/buku6/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});


Route::get('/anggota', function(){
    return 'Halaman Anggota';
});


Route::get('/anggota/{nomer}', function($nomer){
    return 'Halaman Anggota dengan nrp' . $nomer;
});

Route::get('/home', function () {
    return view('blog/home', ['nama' => 'Azzam']);
});
Route::get('/kontak', function () {
    return view('blog/kontak');
});
Route::get('/tentang', function () {
    return view('blog/tentang');
});

Route::get('/databuku', function () {
    return view('blog/databuku');
});

Route::get('/tambah', function () {
    return view('blog/tambahbuku');
});

Route::get('/buku','App\Http\Controllers\BukuController@index');
Route::get('/buku2','App\Http\Controllers\Buku2Controller@index');

Route::post('/buku/tambah','App\Http\Controllers\BukuController@tambah_buku');
