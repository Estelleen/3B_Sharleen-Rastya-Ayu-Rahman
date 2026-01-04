<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RanksController;
use App\Models\Ranks;
use App\Models\Students;
use Illuminate\Support\Facades\Route;

// ==========================================
// 1. PUBLIC (Bisa diakses tanpa login)
// ==========================================
Route::get('/', function () {
    $ranks = Ranks::all();
    return view('welcome', compact('ranks'));
})->name('landing');

// Login & Register
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', fn () => view('auth.register'))->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Registrasi Student
Route::get('/students/register', [StudentsController::class, 'create'])->name('students.studentsRegister');
Route::post('/students/store', [StudentsController::class, 'store'])->name('students.storeRegister');

// ==========================================
// 2. AUTH ROUTES (Harus Login Dulu)
// ==========================================
Route::middleware(['auth'])->group(function () {
    
    // Profile & Logout (Cuma satu saja, jangan didouble)
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // --- KHUSUS ADMIN & TUTOR ---
    Route::middleware(['check_role:admin,tutor'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Fitur Kelola Ranks (Hanya Admin/Tutor yang bisa akses)
        Route::get('/ranks', function () {
            return view('ranks', ['ranks' => Ranks::all()]);
        })->name('ranks.index');
        
        Route::get('/ranks/create', [RanksController::class, 'create'])->name('aksi.createRanks');
        Route::post('/ranks/store', [RanksController::class, 'store'])->name('aksi.storeRanks');
        Route::get('/ranks/edit/{id}', [RanksController::class, 'edit'])->name('aksi.editRanks');
        Route::post('/ranks/update/{id}', [RanksController::class, 'update'])->name('aksi.updateRanks');
        Route::delete('/ranks/delete/{id}', [RanksController::class, 'delete'])->name('aksi.deleteRanks');

        // Fitur Lihat Students
        Route::get('/students', function () {
            return view('students.students', ['students' => Students::all()]);
        })->name('students.index');
    });

    // --- KHUSUS ADMIN SAJA ---
    Route::middleware(['check_role:admin'])->group(function () {
        Route::get('/admin', function () {
            return view('adminView');
        })->name('admin.view');

        Route::resource('users', UserController::class);
    });
});