<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\projectsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::get('/projects', [projectsController::class, 'index'])->name('project.index');
    Route::get('/projects/create', [projectsController::class, 'create'])->name('project.create');
    Route::post('/projects/create/store', [projectsController::class, 'store'])->name('project.store');
    Route::get('/projects/edit/{id}', [projectsController::class, 'edit'])->name('project.edit');
    Route::post('/projects/update/{id}', [projectsController::class, 'update'])->name('project.update');
    Route::post('/projects/delete/{id}', [projectsController::class, 'delete'])->name('project.delete');
    Route::get('/report/{id}', [projectsController::class, 'report'])->name('project.report');
    Route::get('/inform', [projectsController::class, 'inform'])->name('project.inform');

});

require __DIR__.'/auth.php';
