<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/todos/{todo}', 'App\Http\Controllers\TodoController@show');
Route::post('/todos', 'App\Http\Controllers\TodoController@create');
Route::put('/todos/{todo}', 'App\Http\Controllers\TodoController@update');
Route::delete('/todos/{todo}', 'App\Http\Controllers\TodoController@delete');

