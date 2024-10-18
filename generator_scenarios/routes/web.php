<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;

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

Route::get('/', [ExportController::class, 'inputScenarios']);
Route::get('/export', [ExportController::class, 'exportToWord']);
Route::post('/save', [ExportController::class, 'saveScenarios']);
