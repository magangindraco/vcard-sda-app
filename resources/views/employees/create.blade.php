@extends('layouts.app')

@section('content')

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h1 class="blockquote text-center mb-4">Tambah Data Karyawan</h1>

            <!-- Tampilkan pesan sukses jika ada -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
                @csrf <!-- Token CSRF untuk keamanan -->

                <!-- Form gawe nglebokne jeneng -->
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter employee's name" required>
                </div>

                <!-- Form Input Position -->
                <div class="form-group mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" name="position" class="form-control" id="position" placeholder="Enter employee's position" required>
                </div>

                <!-- Form Input Phone -->
                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter employee's phone number" required>
                </div>

                <!-- Form Input Email -->
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter employee's email" required>
                </div>

                <!-- Form Input Photo -->
                <div class="form-group mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo" accept="image/*">
                    <small class="text-muted d-block mt-2">Upload a profile picture (optional).</small>
                </div>

                <!-- Form Input VCF File -->
                <div class="form-group mb-3">
                    <label for="vcf_file" class="form-label">VCF File</label>
                    <input type="file" name="vcf_file" class="form-control" id="vcf_file" accept=".vcf">
                    <small class="text-muted d-block mt-2">Upload a vCard file (optional).</small>
                </div>

                <!-- Tombol submit dan back -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">Back</a>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<style>
    /* Gaya untuk form */
    .form-control {
        border: 1px solid #ced4da; /* Border default */
        border-radius: 0.25rem; /* Sudut halus */
        transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Transisi border */
    }

    .form-control:focus {
        border-color: #007bff; /* Border saat fokus */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Bayangan saat fokus */
    }

    .btn {
        border-radius: 0.25rem; /* Sudut halus pada tombol */
        transition: background-color 0.3s ease; /* Transisi background tombol */
    }

    .btn-primary {
        padding: 0.375rem 0.75rem; /* Ukuran padding untuk tombol */
        font-size: 0.875rem; /* Ukuran font tombol */
    }

    .btn:hover {
        background-color: #0056b3; /* Warna tombol saat hover */
    }

    .blockquote {
        font-weight: 500; /* Menebalkan teks judul */
        color: #333; /* Warna teks judul */
    }

    .alert {
        border-radius: 0.25rem; /* Sudut halus pada alert */
    }

    /* Style untuk layout form */
    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus untuk elemen */
    }

    .bg-light {
        background-color: #f8f9fa !important; /* Warna latar belakang form */
    }
</style>
