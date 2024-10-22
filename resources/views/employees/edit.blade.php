@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h1 class="blockquote text-center mb-4">Edit Karyawan</h1>

            <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $employee->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="position" class="form-label">Jabatan</label>
                    <input type="text" name="position" class="form-control" id="position" value="{{ $employee->position }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $employee->phone }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $employee->email }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                    <small class="text-muted d-block mt-2">Current Photo:</small>
                    <img src="{{ asset('storage/photos/' . $employee->photo) }}" width="100" alt="current photo" class="mb-2">
                </div>

                <div class="form-group mb-3">
                    <label for="vcf_file" class="form-label">File VCF</label>
                    <input type="file" name="vcf_file" class="form-control" id="vcf_file">
                </div>

                <!-- Tombol submit dan back -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
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

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus untuk elemen */
    }

    .bg-light {
        background-color: #f8f9fa !important; /* Warna latar belakang form */
    }
</style>
