<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Testimonial;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;

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