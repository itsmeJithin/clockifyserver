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
Route::post("/create-or-update-project", 'API\ProjectController@createOrUpdate');
Route::get("/get-all-projects", 'API\ProjectController@getAllProjects');
Route::post("/delete-project", 'API\ProjectController@deleteProject');
Route::get("/get-all-projects-with-timer", 'API\ProjectController@getAllProjectsWithTimer');
Route::post("/start-timer", 'API\ProjectController@startTimer');
Route::post("/stop-timer", 'API\ProjectController@stopTimer');
