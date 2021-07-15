<?php

use App\Http\Controllers\DataHandlerController;
use App\Http\Controllers\layoutController;
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

Route::get('/', [layoutController::class, 'home']);
Route::get('/form' ,[layoutController::class, 'create']);
Route::get('/list' ,[layoutController::class, 'list']);


Route::get('/data-handle/{id}/path',[DataHandlerController::class,'handlePathVariable']);
Route::get('/data-handle/query-string',[DataHandlerController::class,'handleQueryString']);
Route::get('/data-handle/form',[DataHandlerController::class,'returnForm']);
Route::post('/data-handle/form',[DataHandlerController::class,'processForm']);
