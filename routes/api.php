<?php

use Illuminate\Http\Request;

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

//Devuelve todas las mascotas
Route::get('/apiMascotas', 'apiController@mascotas');
//Devuelve todos los usuarios
Route::get('/apiUsuarios', 'apiController@usuarios');
//Devuelve todas las organizaciones
Route::get('/apiOrgs', 'apiController@organizaciones');
//Devuelve un listado de los usuarios registrados en cada mes en base al año pasado por parametro si no se pasa por defecto sera 2020
Route::get('/apiUserYear/{year}', 'apiController@userYear');

Route::get('/apiOrgYear/{year}', 'apiController@orgYear');

Route::get('/apiRefugios/{id}', 'apiController@mascotasRefugio');
