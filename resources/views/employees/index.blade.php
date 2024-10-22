@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 gx-3 row-gap-3">
    <!-- Ndek kene iki gawe cards section / daftar e kuyy horras -->
    @foreach($employees as $employee)
    <div class="col">
        <div class="card h-100 text-center shadow-sm card-3d">
            <!-- ndek kene aku pgn manggil foto profil sing di lebokno -->
            <img src="{{ asset('storage/photos/' . $employee->photo) }}" alt="{{ $employee->name }}" class="card-img-top img-fluid rounded-circle mt-3" style="width: 150px; height: 150px; object-fit: cover; margin: 0 auto;">
            <!-- Lah ndek kene iki di isi karo konten sembuarang, gawe ajaran kotak sik ae ben ga bingung -->
            <div class="card-body">
                <h5 class="card-title">{{ $employee->name }}</h5>
                <p class="card-text text-muted">{{ $employee->position }}</p>
                <p class="card-text text-muted">{{ $employee->phone }}</p>
                <p class="card-text text-muted">{{ $employee->email }}</p>

                <!-- Tombol Aksi iki gawe menembak di mau di bawa kemana hubungan kitaa uhuy-->
                <div class="d-flex justify-content-center mt-3">
                    <a href="{{ url('/v/' . $employee->name) }}" class="btn btn-primary me-2">
                        <i class="bi bi-eye"></i> View
                    </a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning me-2">
                        <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?');">
                            <i class="bi bi-trash-fill"></i> Dell
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
