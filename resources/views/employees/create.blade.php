@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="blockquote text-center mb-4">Tambah Karyawan</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf <!-- Token CSRF untuk keamanan -->

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter employee's name" required>
            </div>

            <div class="form-group col-md-6">
                <label for="position">Position</label>
                <input type="text" name="position" class="form-control" id="position" placeholder="Enter employee's position" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter employee's phone number" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter employee's email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control-file" id="photo" accept="image/*">
            <small class="form-text text-muted">Upload a profile picture (optional).</small>
        </div>

        <div class="form-group">
            <label for="vcf_file">VCF File</label>
            <input type="file" name="vcf_file" class="form-control-file" id="vcf_file" accept=".vcf">
            <small class="form-text text-muted">Upload a vCard file (optional).</small>
        </div>

        <!-- Tombol submit -->
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection
