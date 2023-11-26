<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::get("/",[TestController::class,"home"]);
Route::get("/aboutMe",[TestController::class,"aboutMe"]);
Route::get("/projects",[TestController::class,"projects"]);
Route::get("/contactMe",[TestController::class,"contactMe"]);
Route::get('/download-cv', [TestController::class,'downloadCV']);

