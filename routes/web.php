<?php

use App\Http\Controllers\AttrsViewController;
use App\Http\Controllers\ClassesViewController;
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

Route::controller(ClassesViewController::class)->group(function () {
    Route::get('/classes', 'show')->name('show.classes');
    Route::get('/classes/{classesView}', 'detail')->name('detail.class');
    Route::patch('/classes/{classesView}/update', 'update')->name('update.class');
});

Route::controller(AttrsViewController::class)->group(function () {
    Route::post('/attrs', 'show')->name('detail.attr');
    Route::post('/attrs/create', 'create')->name('create.attr');
    Route::patch('/attrs/update', 'update')->name('update.attr');
});
