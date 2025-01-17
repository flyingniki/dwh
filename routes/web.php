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

Route::get('/', [MetaClassesViewController::class, 'showClasses'])->name('show.classes');

Route::get('attrs/', [MetaClassAttrsViewController::class, 'showAllAttrs'])->name('show.attrs');

Route::get('attrs/{class}', [MetaClassAttrsViewController::class, 'showClassAttr'])->name('class.attr');
