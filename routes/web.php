<?php

use App\Http\Controllers\PrincipalController;
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
    return view('welcome');
});

Route::get('bakery', [PrincipalController::class, 'bakery']);
Route::get('sobrenos', [PrincipalController::class, 'sobrenos']);
Route::get('contato', [PrincipalController::class, 'contato']);