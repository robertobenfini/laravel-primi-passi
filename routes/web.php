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
    
    $data=[
        'titolo' => 'Benvenuto Laravel',
        'descrizione' => 'Il framework di php'
    ];
    
    return view('home', $data);
});

Route::get('/bonus', function () {
    
    $data=[
        'saluto' => 'Ciao classe #99',
    ];
    
    return view('bonus', $data);
});
