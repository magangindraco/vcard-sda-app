<?php


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;





// // Form login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// // Form register
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);

// // Logout
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Hanya bisa diakses oleh tamu (guest)
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegisterForm']);
    Route::post('/register', [RegisterController::class, 'register']);
});

// Logout bisa diakses ketika pengguna sudah login
Route::middleware('auth')->post('/logout', [LoginController::class, 'logout'])->name('logout');




// Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/', [LoginController::class,  'showLoginForm'])->name('login');






// Route untuk menampilkan halaman bisnis
Route::get('/v/administrator', [EmployeeController::class, 'index'])->name('employees.index')->middleware('auth');

// Route untuk menampilkan form tambah kartu nama
Route::get('/v/member/create', [EmployeeController::class, 'create'])->name('employees.create')->middleware('auth');


// Route untuk menyimpan kartu nama yang baru dibuat
Route::post('/v/administrator', [EmployeeController::class, 'store'])->name('employees.store')->middleware('auth');

// Route untuk menampilkan detail bisnis berdasarkan nama
Route::get('/v/{name}', [EmployeeController::class, 'show'])->name('employees.show');

// Route untuk mengedit kartu bisnis
Route::get('/v/member/edit/{name}', [EmployeeController::class, 'edit'])->name('employees.edit')->middleware('auth');

// Route untuk mengupdate kartu bisnis
Route::put('/v/member/update/{name}', [EmployeeController::class, 'update'])->name('employees.update')->middleware('auth');

// Route untuk menghapus kartu bisnis
Route::delete('/v/{name}', [EmployeeController::class, 'destroy'])->name('employees.destroy')->middleware('auth');

// Tambahkan rute ini di routes/web.php
Route::get('employees/{employee}/vcard', [EmployeeController::class, 'downloadVCard'])->name('employees.download-vcard')->middleware('auth');