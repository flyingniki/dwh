<?php

use App\Http\Controllers\MetaClassAttrsViewController;
use App\Http\Controllers\MetaClassesViewController;
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

Route::controller(MetaClassesViewController::class)->group(function () {
    Route::get('/classes', 'showClasses')->name('show.classes');
    Route::get('/classes/{metaClassesView}', 'detailClass')->name('detail.class');
    Route::patch('/classes/{metaClassesView}/update', 'updateClassAttr')->name('update.class');
});

Route::controller(MetaClassAttrsViewController::class)->group(function () {
    Route::get('/attrs', 'showAllAttrs')->name('show.attrs');
});
