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
    return view('welcome');
});
Route::get('hi', function(){
    echo "hi, salam kenal";
});
Route::get('hi/{nama}', function ($nama) {
    return 'Hi, nama saya '.$nama;
});


Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::get('/biodata', 'App\Http\Controllers\HelloController@biodata');

use App\Http\Controllers\OrderController;
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

//atau
//Route::get('/orders/{id}', 'OrderController@show')->name('lihatorder');
//Route::post('/orders', 'OrderController@store')->name('simpanorder');

Route::get('/register','App\Http\Controllers\RegisterController@daftar')->name('daftar');
Route::post('/register','App\Http\Controllers\RegisterController@simpan')->name('simpan');

Route::group(['middleware' => ['auth'],'prefix'=>'admin'], function () {
    Route::get('dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::resource('kategori', 'App\Http\Controllers\KategoriController',['name'=>'kategori']);
    Route::resource('posting', 'App\Http\Controllers\PostingController',['name'=>'posting']);
});

 
    Route::get('profil', function () {
        return "ini halaman profil";
    });
    Route::redirect('home','dashboard');

Route::get('homepage','App\Http\Controllers\HomeController@home')->name('homepage');
Route::get('profil','App\Http\Controllers\HomeController@profil')->name('profil');
Route::get('produk','App\Http\Controllers\ProdukController@produk')->name('produk');
Route::get('/produk/detail/{id}','App\Http\Controllers\ProdukController@detail')->name('detailproduk');

Route::resource('mahasiswa', 'App\Http\Controllers\MahasiswaController',['name'=>'mahasiswa']);
