<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeSettingController;
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

/*
|--------------------------------------------------------------------------
| To complete for assignment
|--------------------------------------------------------------------------
|
| Below is where you can create the APIs your frontend application will require
|
|
*/

// Here is an example route for you to copy
Route::get("/test-get", [ThemeSettingController::class, "testGetApiFunction"]);
Route::post("/test-post", [ThemeSettingController::class, "testPostApiFunction"]);
