<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApiUsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth
Route::post('/login', LoginController::class);
Route::post('/register', RegisterController::class);
Route::post('/logout', LogoutController::class);

//Products
Route::prefix('products')->group(function () {
    Route::get('/cars', [ProductsController::class, 'GetCars']);
    Route::get('/wind-turbines', [ProductsController::class, 'GetWindTurbines']);
    Route::get('/solar-panels', [ProductsController::class, 'GetSolarPanels']);
});

//Api
Route::get('colleagues', [ApiUsersController::class, 'GetAllColleagues']);
Route::get('resources', [ResourcesController::class, 'GetAllResources']);
Route::post('contact', ContactController::class);
