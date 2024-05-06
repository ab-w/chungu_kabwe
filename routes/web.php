<?php

use App\Http\Controllers\Ste;
use App\Http\Controllers\Statement;
use App\Http\Controllers\PdfCreator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\RapidController;
use App\Http\Controllers\DocketController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OccurrenceController;
use App\Http\Controllers\StatementpadController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function () {
  Route::resource('admin', AdminController::class,);
  Route::resource('occurrence', OccurrenceController::class,);
  Route::resource('officer', OfficerController::class);
  Route::resource('department', DepartmentController::class);
  Route::resource('cctv', CctvController::class);
  Route::resource('rapid_response', RapidController::class);
  Route::resource('dockets', DocketController::class);
  Route::resource('statement', StatementpadController::class);
  Route::resource('pdf',PdfController::class);
 // Route::resource('generate-pdf', PdfController::class,);
 Route::post('occurrence/view-pdf',[PdfController::class, 'viewPdf'])->name('viewPdf');
    });
