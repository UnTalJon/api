<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
