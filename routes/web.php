<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\SchedulesController;
use App\Models\Ranks;
use App\Models\Students;
use App\Models\User;
use App\Models\Tutor;
use App\Models\Schedules;
use Illuminate\Http\Request;
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
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // --- KHUSUS ADMIN ---
    Route::middleware(['check_role:admin'])->group(function () {
        Route::get('/admin', function(){
            return view('adminView', [
                'tutors' => User::where('role', 'tutor')->get(),
                'students' => Students::all(), 
                'ranks' => Ranks::all()]);
        })->name('adminView');
        
        // Fitur Kelola Ranks (Hanya Admin yang bisa akses)
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

        // Fitur Lihat Tutors
        Route::get('/tutors', function () {
            $tutors = User::where('role', 'tutor')->get();
            return view('tutor.tutorAdmin', ['tutors' => $tutors]);
        })->name('tutors.index');

        // Fitur Mencocokkan Students dengan Tutor
        Route::post('/admin/assign-tutor/{student_id}', function(Request $request, $student_id) {
            $student = Students::findOrFail($student_id);
            $student->update([
                'tutor_id' => $request->tutor_id
            ]);
            return back()->with('success', 'Tutor assigned successfully!');
        })->name('tutor.tutorAdmin');

        Route::get('/students/edit/{student}', [StudentsController::class, 'edit'])->name('students.editStudents');
        Route::patch('/students/update/{student}', [StudentsController::class, 'update'])->name('students.updateStudents');
    });

    Route::middleware(['check_role:admin'])->group(function () {
        Route::resource('users', UserController::class);
    });

    // ----KHUSUS TUTOR
    Route::middleware(['check_role:tutor'])->group(function () {
    Route::get('/tutor', function() {
        return view('tutorView', [
            'myStudents' => Students::where('tutor_id', auth()->id())->with('rank')->get(), 
        ]);
    })->name('tutorView');
    });
    Route::get('/my-stargazers', function(){
        return view('tutor.myStudents', [
            'myStudents' => Students::where('tutor_id', auth()->id())->with('rank')->get(),
        ]);
    });
    Route::get('/tutor/schedules', function() {
    $mySchedules = Schedules::where('tutor_id', auth()->id())
        ->with('student.rank')
        ->orderByRaw("FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")
        ->orderBy('start_time', 'asc')
        ->get();

    return view('tutor.schedule.schedule', compact('mySchedules'));
})->name('tutor.schedule');
});