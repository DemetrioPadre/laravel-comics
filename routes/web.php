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
  return view('home');
});

Route::get('/Characters', function () {
  return view('Characters');
});

Route::get('/Comics', function () {
  return view('Comics');
});

Route::get('/Movies', function () {
  return view('Movies');
});
Route::get('/Tv', function () {
  return view('Tv');
});
Route::get('/Games', function () {
  return view('Games');
});
Route::get('/Collectibles', function () {
  return view('Collectibles');
});
Route::get('/Video', function () {
  return view('Video');
});
Route::get('/Fans', function () {
  return view('Fans');
});
Route::get('/News', function () {
  return view('News');
});
Route::get('/Shop', function () {
  return view('Shop');
});
