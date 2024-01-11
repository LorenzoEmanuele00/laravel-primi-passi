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

Route::get('/saluto', function () {
    $page_title ='Buongiorno';
    $data = [
        'title' => $page_title,
        'name1' => 'Loris',
        'name2' => 'Luca',
    ];
    return view('saluto', $data);
});

Route::get('/', function () {
    return view('home');
});
