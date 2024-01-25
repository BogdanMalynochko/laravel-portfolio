<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Testimonial;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('index', [
        'skills' => Skill::all(),
        'projects' => Project::all(),
        'testimonials' => Testimonial::all(),
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/load-more-projects', [ProjectController::class, 'ajaxPagination'])->name('load-more-projects');

Route::get('/skills', [SkillController::class, 'index']);

// Regiser user
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// Sessions
Route::get('login', [SessionsController::class, 'login'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'logout'])->middleware('auth');

// Admin
Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin/dashboard/projects', [AdminController::class, 'projects'])->middleware('admin');
Route::delete('admin/dashboard/projects/{project:name}', [AdminController::class, 'destroy'])->middleware('admin');
Route::get('admin/dashboard/projects/create', [AdminController::class, 'create'])->middleware('admin');
Route::post('admin/dashboard/projects', [AdminController::class, 'store'])->middleware('admin');