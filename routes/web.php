<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VulnerabilityController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [VulnerabilityController::class, 'home'])-> name('home');
Route::get('/vulnerabilities', [VulnerabilityController::class, 'index'])-> name('index');

Route::get('/create', [VulnerabilityController::class, 'create'])-> middleware('can:create, App\Models\Vulnerability')-> name('create');

Route::post('/vulnerabilities', [VulnerabilityController::class, 'store'])->name('store');


Route::get('/about', [VulnerabilityController::class, 'about'])-> name('about');
Route::get('/resources', [VulnerabilityController::class, 'resources'])-> name('resources');
Route::get('/contact', [VulnerabilityController::class, 'contact'])-> name('contact');
Route::get('/vulnerabilities/{id}', [VulnerabilityController::class, 'show']);

Route::get('/vulnerabilities/{id}/edit', [VulnerabilityController::class, 'edit'])-> name('edit');
Route::put('/vulnerabilities/{id}/edit', [VulnerabilityController::class, 'update'])-> name('update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
