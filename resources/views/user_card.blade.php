<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard {{ $employee->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .vcard-container {
            max-width: 450px; /* Ukuran kartu diperbesar */
            margin: 0 auto;
            border-radius: 8px; /* Sudut lebih halus */
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .vcard-header {
            background-color: #800000; /* Warna maroon */
            color: white;
            padding: 30px; /* Tambah padding untuk memberi ruang pada logo dan teks */
            text-align: center;
        }

        .vcard-header img.logo {
            display: block;
            margin: 0 auto 15px; /* Margin bawah untuk memberi ruang antara logo dan teks */
            width: 120px;
        }

        .photo-container {
            background-color: #ddd; /* Background placeholder jika tidak ada foto */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin: 10px auto;
            overflow: hidden;
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .vcard-header h2 {
            margin: 10px 0; /* Tambah margin atas dan bawah */
            font-size: 22px; /* Ukuran font lebih besar untuk nama */
        }

        .vcard-header p {
            margin: 5px 0;
            font-size: 14px; /* Ukuran font untuk jabatan */
        }

        .separator {
            border-top: 1px solid white; /* Garis pemisah putih */
            margin: 10px 0; /* Jarak di atas dan bawah */
        }

        .vcard-buttons {
            display: flex;
            justify-content: space-around; /* Pusatkan tombol dengan jarak */
            margin-top: 10px; /* Tambah margin atas tombol */
            padding: 0 10px; /* Padding horizontal */
        }

        .vcard-buttons a {
            background-color: #800000; /* Warna maroon untuk tombol */
            color: white; /* Warna teks putih */
            padding: 10px 15px; /* Ukuran padding lebih besar */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 12px; /* Ukuran font lebih kecil */
            display: flex; /* Untuk menyelaraskan ikon dan teks */
            flex-direction: column; /* Menempatkan ikon di atas teks */
            align-items: center; /* Untuk menyelaraskan ikon di tengah */
            transition: background-color 0.3s; /* Efek transisi saat hover */
        }

        .vcard-buttons i {
            font-size: 20px; /* Ukuran ikon */
            margin-bottom: 3px; /* Jarak antara ikon dan teks */
        }

        .vcard-buttons a:hover {
            background-color: #FFD700; /* Warna gold saat hover */
            color: #800000; /* Warna maroon saat hover */
        }

        .vcard-body {
            background-color: white;
            padding: 15px; /* Padding lebih kecil */
            color: black;
            font-size: 12px; /* Ukuran font lebih kecil */
        }

        .vcard-body .icon {
            margin-right: 10px;
            color: #800000; /* Warna maroon untuk ikon */
            font-size: 14px; /* Ukuran font ikon lebih kecil */
        }

        .vcard-footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px; /* Padding lebih besar untuk footer */
            font-size: 10px; /* Ukuran font lebih kecil */
        }

        .vcard-body ul {
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
        }

        .vcard-body li {
            margin-bottom: 15px; /* Spacing between list items */
            display: flex; /* Align items horizontally */
            align-items: center; /* Center align vertically */
        }

        .vcard-body a {
            text-decoration: none; /* Remove underline */
            color: black; /* Default color */
            transition: color 0.3s; /* Transisi untuk warna */
        }

        .vcard-body a:hover {
            color: #800000; /* Warna maroon saat hover */
        }
    </style>
</head>

<body>
    <div class="vcard-container">
        <div class="vcard-header">
            <img src="{{ asset('images/sdastore.png') }}" alt="SDA Global Logo" class="logo">
            <div class="photo-container">
                <img src="{{ asset('storage/photos/' . $employee->photo) }}" alt="{{ $employee->name }}'s photo" class="img-thumbnail">
            </div>
            <h2>{{ $employee->name }}</h2>
            <p>PT. SDA Global</p>
            <p>{{ $employee->position }}</p>
            <div class="separator"></div>
            <div class="vcard-buttons">
                <a href="https://sda.co.id" target="_blank">
                    <i class="fas fa-globe-asia fa-lg"></i>
                    Website
                </a>
                <a href="{{ asset('storage/' . $employee->vcf_file) }}" download>
                    <i class="fas fa-user-circle fa-lg"></i>
                    Save Contact
                </a>
            </div>
        </div>

        <div class="vcard-body">
            <ul>
                <li>
                    <i class="fas fa-phone icon"></i>
                    <span>Phone: {{ $employee->phone }}</span>
                </li>
                <li>
                    <i class="fas fa-envelope icon"></i>
                    <span>Email: <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></span>
                </li>
                <li>
                    <i class="fas fa-location icon"></i>
                    <span>
                        <a href="#" target="_blank">
                            Komp. Margomulyo Indah I Blok A No. 7-8 Jl. Margomulyo Indah I, Balongsari - Tandes, Surabaya 60186, Jawa Timur - Indonesia
                            <br><small class="fs-sm opacity-50">Show on map</small>
                        </a>
                    </span>
                </li>
                <li>
                    <i class="fas fa-globe-asia icon"></i>
                    <span>
                        <a href="http://www.sdaglobal.co.id" target="_blank">www.sdaglobal.co.id</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="vcard-footer">
            Copyright &copy; 2024 SDA. All Rights Reserved
        </div>
    </div>
</body>

</html>
