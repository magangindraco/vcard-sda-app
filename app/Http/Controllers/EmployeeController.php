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
       // Mengarahkan ke halaman create
       return view('employees.create');
    }

    public function show($name)
    {
        // $employee = Employee::findOrFail($name); // Mengambil data employee berdasarkan id
        // return view('employees.show', compact('employee')); // Mengirim data ke view

        $employee = Employee::where('name', $name)->firstOrFail();

        return view('employees.show', compact('employee'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',  // Pastikan sudah disesuaikan dengan 'jabatan' jika diubah
            'office' => 'required|string|max:15',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vcf_file' => 'nullable|file|mimes:vcf|max:2048', // Validasi VCF
        ]);
        
        // Menyimpan foto
        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Menyimpan file VCF
        if ($request->hasFile('vcf_file')) {
            $vcfFilenameWithExt = $request->file('vcf_file')->getClientOriginalName();
            $vcfFilename = pathinfo($vcfFilenameWithExt, PATHINFO_FILENAME);
            $vcfExtension = $request->file('vcf_file')->getClientOriginalExtension();
            $vcfFileNameToStore = $vcfFilename . '_' . time() . '.' . $vcfExtension;
            $vcfPath = $request->file('vcf_file')->storeAs('public/vcf', $vcfFileNameToStore);
        } else {
            $vcfFileNameToStore = null; // Tidak ada file VCF
        }

        // Menyimpan data karyawan ke database
        Employee::create([
            'name' => $request->name,
            'position' => $request->position, // Pastikan field sudah ada di DB
            'office' => $request->office,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'photo' => $fileNameToStore,
            'vcf_file' => $vcfFileNameToStore, // Menyimpan nama file VCF ke DB
        ]);

 // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

   


    

    public function edit($name)
    {
        // $employee = Employee::findOrFail($name);
        // return view('employees.edit', compact('employee'));
        

        $employee = Employee::where('name', $name)->firstOrFail();
        return view('employees.edit', compact('employee'));
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
