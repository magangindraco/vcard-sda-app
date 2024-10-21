<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Route untuk halaman home
Route::get('/', function () {
    return redirect()->route('login'); // Arahkan pengguna ke halaman login sebagai langkah awal
});

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route untuk halaman register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Route untuk employee
Route::middleware(['auth'])->group(function () {
    Route::resource('employees', EmployeeController::class);
    Route::get('v/{username}', [EmployeeController::class, 'show'])->name('vcard.show');

    // Route untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
    Route::post('admin/employees', [EmployeeController::class, 'store'])->name('admin.employees.store');
    
    Route::get('employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit'); // Menampilkan form edit karyawan
    Route::put('employees/{id}', [EmployeeController::class, 'update'])->name('employees.update'); // Memperbarui data karyawan
    Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy'); // Menghapus karyawan
    
    Route::get('/vcard-templates', [EmployeeController::class, 'vCardTemplates'])->name('vcard.templates');
    Route::get('/employees/{id}/download', [EmployeeController::class, 'downloadVCard'])->name('employees.downloadVCard');
});

// Auth routes for register and login
Auth::routes();
