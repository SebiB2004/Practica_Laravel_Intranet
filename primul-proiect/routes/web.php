<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimulController;
use App\Http\Controllers\ControllerAngajat;
use App\Models\Angajat;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('welcome');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/salut', [PrimulController::class, 'index']);

    Route::get('/dashboard', [ControllerAngajat::class, 'dashboard'])->name('dashboard');

    Route::resource('angajati', ControllerAngajat::class);

    Route::get('/documente', [DocumentController::class, 'index'])->name('documente');

    Route::get('/download/{filename}', [DocumentController::class, 'download'])->name('document.download');
});