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
    return view('tasks.index');
});

Route::get('/tasks/create',function(){
    return view('tasks.create');
});

Route::get('/tasks/update', function(){
    return view('tasks.update');
});

Route::get('/tasks/delete',function(){

});
