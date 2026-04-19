<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\MessageController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

// ================= HOME =================
Route::get('/', [PageController::class, 'home'])->name('home');

// ================= ABOUT =================
Route::get('/about', [PageController::class, 'about'])->name('about');

// ================= SKILLS =================
Route::get('/skills', [PageController::class, 'skills'])->name('skills');

// ================= CV =================
Route::get('/cv', [PageController::class, 'cv'])->name('cv');

// Téléchargement CV (corrigé propre)
Route::get('/download-cv', function () {
    return response()->download(public_path('herby.pdf'));
})->name('cv.download');

// ================= CONTACT =================

// ✔ Affichage page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ✔ Envoi formulaire (CORRIGÉ 🔥)
Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');

// ================= PROJECTS =================
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// ================= ADMIN =================
Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/projects', [AdminProjectController::class, 'index'])
        ->name('admin.projects');

    Route::get('/messages', [MessageController::class, 'index'])
        ->name('admin.messages');

});