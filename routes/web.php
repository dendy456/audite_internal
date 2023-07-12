<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\PeriodeController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auditor\AuditorController;
use App\Http\Controllers\Auditee\AuditeeController;
use Illuminate\Support\Facades\Auth;

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


// Setelah pengguna berhasil login
Route::post('/', [LoginController::class, 'login'])->name('login');

// Setelah login berhasil, pengguna akan diarahkan sesuai peran mereka
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('index.admin');
        } elseif (auth()->user()->isAuditor()) {
            return redirect()->route('index.auditor');
        } elseif (auth()->user()->isAuditee()) {
            return redirect()->route('index.auditee');
        }
    });
    
    // Route lainnya
    // ...
});








Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index.admin');
        Route::get('profile', [AdminController::class, 'createProfile'])->name('profile');
        Route::put('editProfile', [AdminController::class, 'editProfile'])->name('editProfile');
        Route::resource('periode', PeriodeController::class);
        Route::put('/periode/{id}', [PeriodeController::class, 'update'])->name('periode.update');
        Route::delete('/periode/{id}', [PeriodeController::class, 'destroy'])->name('periode.destroy');
        Route::resource('unit', UnitController::class);
        Route::put('/unit/{id}', [UnitController::class, 'update'])->name('unit.update');
        Route::delete('/unit/{id}', [UnitController::class, 'destroy'])->name('unit.destroy');
    });

Route::prefix('auditor')
    ->middleware(['auth', 'auditor'])
    ->group(function () {
        Route::get('/', [AuditorController::class, 'index'])->name('index.auditor');
        Route::get('profileAuditor', [AuditorController::class, 'createProfile'])->name('profileAuditor');
        Route::put('editProfile', [AuditorController::class, 'editProfile'])->name('editProfile');
    });

    Route::prefix('auditee')
    ->middleware(['auth', 'auditee'])
    ->group(function () {
        Route::get('/', [AuditeeController::class, 'index'])->name('index.auditee');
        Route::get('profileAuditee', [AuditeeController::class, 'createProfile'])->name('profileAuditee');
        Route::put('editProfileAuditee', [AuditeeController::class, 'editProfile'])->name('editProfileAuditee');
    });

Auth::routes();
