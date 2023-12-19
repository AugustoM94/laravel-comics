<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('db.comics');

    return view('home', compact('comics'));
})->name('home');

Route::get('/comics', function () {
    $comics = config('db.comics');

    return view('comic.index', compact('comics'));
})->name('comic.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];

        return view('comic.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic.show');
