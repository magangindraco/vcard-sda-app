<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Tentukan halaman dashboard untuk admin atau user biasa
        if ($user->role === 'admin') {
            // Jika role adalah admin, tampilkan halaman dashboard admin
            return view('employees.index');
        } else {
            // Jika role adalah user biasa, tampilkan halaman dashboard user
            return view('dashboard.user');
        }
    }
}
