<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoussefController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MassagesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\CommentsController;

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

Route::Resource('youssef', YoussefController::class);
Route::Resource('users', UsersController::class);
Route::Resource('comments', CommentsController::class);
Route::Resource('projects', ProjectsController::class);
Route::Resource('massages', MassagesController::class);
Route::Resource('contacts', ContactsController::class);
Route::Resource('posts', PostsController::class);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group(
//     function () {
//         Route::get('/user', function (Request $request) {
//             return $request->user();
//         });

//         Route::apiResource('youssef', YoussefController::class);
//     }
// );

