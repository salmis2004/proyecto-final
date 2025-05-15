<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerWordController;
Use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\WeatherController;

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


Route::get('random-word/{categoryId}', [WordController::class, 'getRandomWord']);
Route::middleware('auth:sanctum')->get('random-word/{categoryId}', [WordController::class, 'getRandomWord']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/weather', [App\Http\Controllers\Api\WeatherController::class, 'getWeather']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
Route::get('/getCategory', [CategoryController::class, 'getCategory']);
Route::middleware('auth:sanctum')->get('/player-words', [PlayerWordController::class, 'getPlayerWord']);
Route::middleware('auth:sanctum')->post('check-answer', [WordController::class, 'checkAnswer']);
Route::post('word-letter', [WordController::class, 'getWordLetter']);
Route::post('order-word-letter', [WordController::class, 'getWordOrderLetter']);
Route::post('getWords', [WordController::class, 'getWords']);
Route::middleware('auth:sanctum')->get('/word-events', [WordEventController::class, 'registrerEvent']);
