<?php
/**
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


Route::get('/read', function () {
    return view('peopleread');
});
*/


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/malina/49951/people', [PeopleController::class, 'show']);
Route::get('/malina/49951/people/{id}', [PeopleController::class, 'index']);
Route::post('/malina/49951/people', [PeopleController::class, 'create']);
Route::delete('/malina/49951/people/{id}', [PeopleController::class, 'delete']);
Route::put('/malina/49951/people/{id}', [PeopleController::class, 'update']);


