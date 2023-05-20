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

Route::get('/show', [PeopleController::class, 'show']);
Route::get('/show/{id}', [PeopleController::class, 'index']);
Route::post('/create', [PeopleController::class, 'create']);
Route::delete('/delete/{id}', [PeopleController::class, 'delete']);
Route::put('/update/{id}', [PeopleController::class, 'update']);


