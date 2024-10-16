<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusinessCardController;


Route::get('/', function () {
    return redirect()->route('employees.index');
});

Route::resource('employees', EmployeeController::class);
Route::get('v/{username}', [EmployeeController::class, 'show'])->name('vcard.show');

Route::get('admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
Route::post('admin/employees', [EmployeeController::class, 'store'])->name('admin.employees.store');

Route::get('employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit'); // Menampilkan form edit karyawan
Route::put('employees/{id}', [EmployeeController::class, 'update'])->name('employees.update'); // Memperbarui data karyawan
Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy'); // Menghapus karyawan

Route::get('/vcard-templates', [EmployeeController::class, 'vCardTemplates'])->name('vcard.templates');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/employees/{id}/download', [EmployeeController::class, 'downloadVCard'])->name('employees.downloadVCard');

Route::get('business-cards/{businessCard}/vcard', [BusinessCardController::class, 'downloadVCard'])->name('business-cards.download-vcard');