<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ScheduleController;
use App\Http\Controllers\Api\V1\QuestController;
use App\Http\Controllers\Api\V1\ReportController;
use App\Http\Controllers\Api\V1\PersonController;
use App\Http\Controllers\Api\V1\FindController;
use App\Http\Controllers\Api\V1\LogController;
use App\Http\Controllers\Api\V1\MunicipioController;
use App\Http\Controllers\Api\V1\CollectiveController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api\v1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('schedules', ScheduleController::class);
    Route::apiResource('quests', QuestController::class);
    Route::apiResource('reports', ReportController::class);

    Route::apiResource('persons', PersonController::class);
    Route::apiResource('finds', FindController::class);
    Route::apiResource('logs', LogController::class);
    Route::apiResource('municipios', MunicipioController::class);
    Route::apiResource('collectives', CollectiveController::class);

});
