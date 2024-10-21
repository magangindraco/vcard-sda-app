<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Dompdf\Options;

class EmployeeController extends Controller
{
    public function index()
    {
        // Menampilkan semua data karyawan
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
       
    }

   

    public function show($id)
    {
        $employee = Employee::findOrFail($id); // Mengambil data employee berdasarkan id
        return view('employees.index', compact('employee')); // Mengirim data ke view
    }
    

    public function edit($id)
    {
        
    }

    // Fungsi untuk meng-generate dan mendownload vCard
    public function downloadVCard(Employee $employee)
    {
        // Isi dari vCard
        $vCardContent = "BEGIN:VCARD\n";
        $vCardContent .= "VERSION:3.0\n";
        $vCardContent .= "N:{$employee->name};;;;\n";
        $vCardContent .= "FN:{$employee->name}\n";
        $vCardContent .= "TITLE:{$employee->position}\n";
        $vCardContent .= "TEL;TYPE=CELL,voice:{$employee->mobile}\n";
        $vCardContent .= "EMAIL:{$employee->email}\n";
        $vCardContent .= "END:VCARD";

        // Nama file
        $fileName = "vcard_{$employee->name}.vcf";

        // Simpan file sementara dan download
        Storage::disk('local')->put($fileName, $vCardContent);
        return response()->download(storage_path("app/{$fileName}"))->deleteFileAfterSend(true);
    }

}
