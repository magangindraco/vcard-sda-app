<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusinessCardController;




// Route untuk menampilkan halaman bisnis

Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');



// Route untuk menampilkan form tambah kartu nama
Route::get('/v/create', [EmployeeController::class, 'create'])->name('employees.create');


// Route untuk menyimpan kartu nama yang baru dibuat
Route::post('/v', [EmployeeController::class, 'store'])->name('employees.store');

// Route untuk menampilkan detail bisnis berdasarkan nama
Route::get('/v/{name}', [EmployeeController::class, 'show'])->name('employees.show');

// Route untuk mengedit kartu bisnis
Route::get('/v/edit/{name}', [EmployeeController::class, 'edit'])->name('employees.edit');

// Route untuk mengupdate kartu bisnis
Route::put('/v/update/{name}', [EmployeeController::class, 'update'])->name('employees.update');

// Route untuk menghapus kartu bisnis
Route::delete('/v/{name}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

// Tambahkan rute ini di routes/web.php
Route::get('employees/{Employee}/vcard', [EmployeeController::class, 'downloadVCard'])->name('employees.download-vcard');

























// Route::get('/', function () {
//     return redirect()->route('employees.index');
// });

// // download .vcf
// Route::get('employee/{id}', [EmployeeController::class, 'show'])->name('employees.show');

// Route::resource('employees', EmployeeController::class);
// Route::get('v/{username}', [EmployeeController::class, 'show'])->name('vcard.show');

// Route::get('admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
// Route::post('admin/employees', [EmployeeController::class, 'store'])->name('admin.employees.store');

// Route::get('employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit'); // Menampilkan form edit karyawan
// Route::put('employees/{id}', [EmployeeController::class, 'update'])->name('employees.update'); // Memperbarui data karyawan
// Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy'); // Menghapus karyawan

// Route::get('/vcard-templates', [EmployeeController::class, 'vCardTemplates'])->name('vcard.templates');

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/employees/{id}/download', [EmployeeController::class, 'downloadVCard'])->name('employees.downloadVCard');

// Route::get('business-cards/{businessCard}/vcard', [BusinessCardController::class, 'downloadVCard'])->name('business-cards.download-vcard');