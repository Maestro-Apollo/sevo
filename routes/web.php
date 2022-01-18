<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TemplateController::class, 'index']);
Route::get('/about-us', [TemplateController::class, 'about_us']);
Route::get('/courses', [TemplateController::class, 'courses']);
Route::get('/instructors', [TemplateController::class, 'instructors']);
Route::get('/contact-us', [TemplateController::class, 'contact_us']);
Route::get('/login', [TemplateController::class, 'login']);
Route::get('/courses-details', [TemplateController::class, 'courses_details']);