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
    return view('home')->name('home');
});

Route::get('/', function () {
    return view('comics');
});

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    $films = [
    [
      "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
      "price" => "$19.99",
      "series" => "Action Comics",
      "type" => "comic book"
    ],
    [
      "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
      "price" => "$3.99",
        "series"  => "American Vampire 1976",
        "type"  => "comic book",
    ],
    ];
    return view('movies', ['films'=>$films]);
})->name('movies');



