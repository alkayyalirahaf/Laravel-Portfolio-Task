<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DeveloperController;

// Route::get('/', function () {
//     return 'أهلاً بكم في معسكر البرمجة!';
// });


// Route::get('/student/{name}', function ($name) {
//     return 'أهلاً بك يا ' . $name . ' في الدورة';
// });



// Route::get('/home', function () {
//     $name = 'تطوير تطبيقات الويب باستخدام Laravel';
//     return view('home', ['courseName' => $name]);
// });


//task

// Route::get('/developer/{name}/{track}', function ($name, $track) {
//     return view('profile', [
//         'developerName' => $name,
//         'developerTrack' => $track
//     ]);
// });



//profolio

Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects.index');

Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');

Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');

Route::get('/admin/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');

Route::put('/admin/projects/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');

Route::delete('/admin/projects/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');


//

Route::get('/developer/{id}',[DeveloperController::class , 'show'])->name('developer.show');
Route::get('/developer/{id}/edit' ,[DeveloperController::class ,'edit'])->name('developer.edit');
Route::put('/developer/{id}', [DeveloperController::class, 'update'])->name('developer.update');