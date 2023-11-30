<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
include base_path('routes/backend.php');

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

Route::prefix('')->group(base_path('routes/web.php'));
Route::prefix('backend')->group(base_path('routes/backend.php'));



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
