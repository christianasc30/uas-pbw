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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('/mahasiswa/all','mahasiswaAPIcontroller@all');
route::post('/mahasiswa/create','mahasiswaAPIcontroller@create');
route::post('/mahasiswa/update/{id}','mahasiswaAPIcontroller@update');
route::post('/mahasiswa/delete/{id}','mahasiswaAPIcontroller@delete');

route::get('/dosen/all','dosenAPIcontroller@all');
route::post('/dosen/create','dosenAPIcontroller@create');
route::post('/dosen/update/{id}','dosenAPIcontroller@update');
route::post('/dosen/delete/{id}','dosenAPIcontroller@delete');

