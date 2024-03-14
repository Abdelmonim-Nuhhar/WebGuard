<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VulnerabilityController;
use App\Http\Controllers\CustomerController;
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
Route::delete('/vulnerabilities/{id}', [VulnerabilityController::class, 'destroy'])-> name('destroy');

Route::get('/vulnerabilities/{id}/edit', [VulnerabilityController::class, 'edit'])-> name('edit');
Route::put('/vulnerabilities/{id}/edit', [VulnerabilityController::class, 'update'])-> name('update');

Route::post('/vulnerabilities/{id}', [VulnerabilityController::class, 'show']);
Route::post('/vulnerabilities/1', [VulnerabilityController::class, 'show'])->name('sessionID');
Route::post('/vulnerabilities/3', [VulnerabilityController::class, 'show'])->name('xss');


// Routes for weak session ID vulnerabilities
Route::post('/vulnerabilities/weak_session/low', [VulnerabilityController::class, 'generateWeakSessionLow'])->name('weak_session.low');
Route::post('/vulnerabilities/weak_session/medium', [VulnerabilityController::class, 'generateWeakSessionMedium'])->name('weak_session.medium');
Route::post('/vulnerabilities/weak_session/high', [VulnerabilityController::class, 'generateWeakSessionHigh'])->name('weak_session.high');
Route::post('/vulnerabilities/weak_session/impossible', [VulnerabilityController::class, 'generateWeakSessionImpossible'])->name('weak_session.impossible');


// Routes for flags submisson
Route::get('/showFlagSubmissionForm', [VulnerabilityController::class, 'showFlagSubmissionForm'])->name('showFlagSubmissionForm');

Route::post('/showFlagSubmissionForm', [VulnerabilityController::class, 'submitFlag'])->name('submitFlag');

// XSS

Route::get('/xss/reflected', [VulnerabilityController::class, 'reflectedXSS'])->name('xss.reflected');
Route::get('/xss/medium', [VulnerabilityController::class, 'reflectedXSSMedium'])->name('xss.medium');
Route::get('/xss/high', [VulnerabilityController::class, 'reflectedXSSHigh'])->name('xss.high');
Route::get('/xss/impossible', [VulnerabilityController::class, 'reflectedXSSImpossible'])->name('xss.impossible');


// stored XSS vulnerabilities
Route::get('/xss/stored', [VulnerabilityController::class, 'storedXSS'])->name('xss.stored');
// stored XSS low level
Route::get('/storedXSS/low', [VulnerabilityController::class, 'showLowLevelForm'])->name('storedXSS.low');
Route::post('/storedXSS/low', [VulnerabilityController::class, 'storeLowLevelComment'])->name('storedXSS.storeLow');

// stored XSS medium level
Route::get('/storedXSS/medium', [VulnerabilityController::class, 'showMediumLevelForm'])->name('storedXSS.medium');
Route::post('/storedXSS/medium', [VulnerabilityController::class, 'storeMediumLevelComment'])->name('storedXSS.storeMedium');

// stored XSS high level
Route::get('/storedXSS/high', [VulnerabilityController::class, 'showHighLevelForm'])->name('storedXSS.high');
Route::post('/storedXSS/high', [VulnerabilityController::class, 'storeHighLevelComment'])->name('storedXSS.storeHigh');

// stored XSS imposible level
Route::get('/storedXSS/impossible', [VulnerabilityController::class, 'showImpossibleLevelForm'])->name('storedXSS.impossible');
Route::post('/storedXSS/impossible', [VulnerabilityController::class, 'storeImpossibleLevelComment'])->name('storedXSS.storeImpossible');

// Dom-XSS
Route::get('/domXSS/low', [VulnerabilityController::class, 'showDOMXSSLowLevelForm'])->name('domXSS.low');


Route::post('/guestbook/clear', [VulnerabilityController::class, 'clearGuestbook'])->name('guestbook.clear');



//SQL 
Route::get('/search', [CustomerController::class, 'showSearchForm'])->name('customer.showSearchForm');
Route::post('/search', [CustomerController::class, 'search'])->name('customer.search');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
