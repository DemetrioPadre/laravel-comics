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
})->name('home');

Route::get('/Characters', function () {
  return view('Characters');
})->name('Characters');

Route::get('/Comics', function () {
  return view('Comics');
})->name('Comics');

Route::get('/Movies', function () {
  return view('Movies');
})->name('Movies');

Route::get('/Tv', function () {
  return view('Tv');
})->name('Tv');

Route::get('/Games', function () {
  return view('Games');
})->name('Games');

Route::get('/Collectibles', function () {
  return view('Collectibles');
})->name('Collectibles');

Route::get('/Video', function () {
  return view('Video');
})->name('Video');

Route::get('/Fans', function () {
  return view('Fans');
})->name('Fans');

Route::get('/News', function () {
  return view('News');
})->name('News');

Route::get('/Shop', function () {
  return view('Shop');
})->name('Shop');
