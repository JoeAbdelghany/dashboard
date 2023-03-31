<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ApisController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'home'])-> name('home');
/*
|--------------------------------------------------------------------------
| Web Routes - apis routes
|--------------------------------------------------------------------------
|
| here the routes for apis to use it at the website.
| var routes: [] = [youssef, users, projects, posts];
|
*/
// Route::resource('apis', ApisController::class);
// Route::get('/apis/posts', [PagesController::class, 'posts'])-> name('posts');
// Route::get('/apis/users', [PagesController::class, 'users'])-> name('users');
// Route::get('/apis/projects', [PagesController::class, 'projects'])-> name('projects');
//
//
// Route::get('/', [PagesController::class , 'home'])-> name('home');
// Route::get('/about', [PagesController::class , 'about'])-> name('about');
// Route::get('/products', [PagesController::class , 'products'])-> name('products');
// Route::resource('users', UsersController::class);
// Route::get('/contact', [PagesController::class , 'contact'])-> name('contact');
