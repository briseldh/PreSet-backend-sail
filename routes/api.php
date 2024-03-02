<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//==============Public Routes=================//
Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);


Route::middleware('auth:web')->group(function () {

    Route::controller(PostController::class)->group(function () {

        Route::post('/post/insert', 'insert');
        Route::patch('/post/update/{post}', 'update');
        Route::delete('/post/delete/{post}', 'delete');
        Route::get('/post/getById/{post}', 'getById');
    });
});
