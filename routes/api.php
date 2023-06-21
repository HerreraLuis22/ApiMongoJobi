<?php

use App\Http\Controllers\TrabajoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::controller(TrabajoController::class)->group(function(){
    Route::get('/Trabajos','index');
    Route::post('/Trabajo','store');
    Route::put('/Trabajo/{id}','update');
});