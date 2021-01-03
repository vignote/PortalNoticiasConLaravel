<?php

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



Route::get('noticias',"App\Http\Controllers\NoticiaController@index" );
Route::get('noticias/{page_number}',"App\Http\Controllers\NoticiaController@page" );
Route::get("noticia/{noticia}","App\Http\Controllers\NoticiaController@show");
Route::get("categoria/{categoriaId}/{page_number}","App\Http\Controllers\NoticiaController@categoria");
Route::get("categoria/{categoriaId}","App\Http\Controllers\NoticiaController@categoria");
Route::get("autor/{autorId}/{page_number}","App\Http\Controllers\NoticiaController@autor");
Route::get("autor/{autorId}","App\Http\Controllers\NoticiaController@autor");

