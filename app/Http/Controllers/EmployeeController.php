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

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',  // Pastikan sudah disesuaikan dengan 'jabatan' jika diubah
            'phone' => 'required|string|max:15',
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
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $fileNameToStore,
            'vcf_file' => $vcfFileNameToStore, // Menyimpan nama file VCF ke DB
        ]);

 // Redirect ke halaman daftar karyawan dengan pesan sukses
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

    public function show($username)
    {
        // Menampilkan vCard berdasarkan nama user
        // Pastikan nama unik, jika tidak lebih baik pakai slug atau ID
        $employee = Employee::where('name', $username)->firstOrFail();

        return view('user_card', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'photo' => 'image|nullable|max:1999',
        ]);

        $employee = Employee::findOrFail($id);
// Menyimpan foto baru jika ada
        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = $employee->photo; // Jika tidak ada foto baru, gunakan foto lama
        }

        // Memperbarui data karyawan di database
        $employee->update([
            'name' => $request->name,
            'position' => $request->position,
            'phone' => $request->phone,
            'email' => $request->email,
            'photo' => $fileNameToStore,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        // Menghapus foto dari storage jika ada
        if ($employee->photo != 'noimage.jpg') {
            Storage::delete('public/photos/' . $employee->photo);
        }
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

    public function vCardTemplates()
    {
        $employees = Employee::all(); // Ambil semua karyawan dari database
        return view('employees.vcard_templates', compact('employees'));
    }

    public function downloadVCard($id)
    {
        // Retrieve employee data
        $employee = Employee::findOrFail($id);

        // Generate the vCard content (you can customize this as needed)
        $vCardContent = "BEGIN:VCARD\n";
        $vCardContent .= "VERSION:3.0\n";
        $vCardContent .= "FN:{$employee->name}\n";
        $vCardContent .= "TITLE:{$employee->position}\n";
        $vCardContent .= "TEL:{$employee->phone}\n";
        $vCardContent .= "EMAIL:{$employee->email}\n";
        $vCardContent .= "ADR:{$employee->address}\n";
        $vCardContent .= "END:VCARD\n";

        // Create a new PDF instance
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        // Load HTML content into DomPDF
        $html = '<h1>vCard for ' . $employee->name . '</h1>';
        $html .= nl2br(htmlentities($vCardContent)); // Convert newlines to <br> and escape HTML
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Output the generated PDF to browser for download
        return $dompdf->stream("vcard_{$employee->name}.pdf", [
            'Attachment' => true // Force download
        ]);
    }

    public function storeVCard($employee)
    {
        $vCardContent = "BEGIN:VCARD\n";
        $vCardContent .= "VERSION:3.0\n";
        $vCardContent .= "FN:{$employee->name}\n";
        $vCardContent .= "TEL;TYPE=CELL:{$employee->phone}\n";
        $vCardContent .= "EMAIL:{$employee->email}\n";
        $vCardContent .= "END:VCARD\n";

        // Store the vCard in the public storage
        $fileName = strtolower(str_replace(' ', '_', $employee->name)) . '.vcf'; // Create a file name
        Storage::disk('public')->put($fileName, $vCardContent); // Save vCard content

        return $fileName; // Return the file name
    }
}