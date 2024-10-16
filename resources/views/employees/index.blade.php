@extends('layouts.app')

@section('content')
<div class="container">
<style>
    .employee-card {
        border: none; /* Hapus border */
        border-radius: 15px; /* Sudut melengkung */
        overflow: hidden; /* Sembunyikan bagian yang melampaui */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi untuk efek */
        position: relative; /* Untuk posisi button unduh */
    }

    .employee-card img {
        height: 200px; /* Ukuran tetap untuk gambar */
        object-fit: cover; /* Memastikan gambar terisi penuh */
    }

    .employee-card:hover {
        transform: scale(1.05); /* Membesarkan kartu saat hover */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Menambah bayangan */
    }

    .card-body {
        background-color: #f9f9f9; /* Latar belakang kartu */
        padding: 20px; /* Padding untuk teks */
        border-radius: 0 0 15px 15px; /* Sudut melengkung bawah */
    }

    .download-btn {
        position: absolute; /* Posisi button unduh di kanan atas */
        top: 10px; /* Jarak dari atas */
        right: 10px; /* Jarak dari kanan */
        background-color: transparent; /* Transparan */
        border: none; /* Tanpa border */
        cursor: pointer; /* Kursor pointer */
    }

    .download-btn img {
        width: 24px; /* Ukuran logo unduh */
        height: 24px; /* Ukuran logo unduh */
    }
</style>
    <div class="row">
        @foreach($employees as $employee)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card employee-card">
                    <img src="{{ asset('storage/photos/' . $employee->photo) }}" class="card-img-top" alt="{{ $employee->name }}'s photo">
                    
                    <!-- Button untuk mengunduh vCard -->
                    <form action="{{ route('employees.downloadVCard', $employee->id) }}" method="GET" class="download-btn">
                        <button type="submit" title="Download vCard">
                            <img src="{{ asset('icons/download.svg') }}" alt="Download Icon">
                        </button>
                    </form>

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $employee->name }}</h5>
                        <p class="card-text">{{ $employee->position }}</p>
                        <p class="card-text">{{ $employee->phone }}</p>
                        <p class="card-text">{{ $employee->email }}</p>
                        <p class="card-text">{{ $employee->address }}</p>
                        <a href="{{ url('/v/' . $employee->name) }}" class="btn btn-primary">View Card</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?');">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
