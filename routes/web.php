<?php

use Illuminate\Support\Facades\Route;

// copia il namespace dal controller
use App\Http\Controllers\PageController as StaticController;

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

Route::get('/',[StaticController::class, 'homepage'])->name('home');