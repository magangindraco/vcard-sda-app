<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Sesuaikan dengan model Anda
use Illuminate\Support\Facades\Storage;

class BusinessCardController extends Controller
{
    public function downloadVCard($id)
    {
        // Cari data employee berdasarkan ID
        $employee = Employee::findOrFail($id);

        // Dapatkan nama file vCard
        $filePath = 'public/vcards/' . $employee->vcf_file; // Sesuaikan dengan path file Anda

        // Cek apakah file ada
        if (Storage::exists($filePath)) {
            return response()->download(storage_path('app/' . $filePath), $employee->vcf_file);
        }

        return redirect()->back()->with('error', 'File vCard tidak ditemukan.');
    }
}
