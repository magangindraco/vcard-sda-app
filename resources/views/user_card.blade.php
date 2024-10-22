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
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .vcard-container {
            max-width: 400px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .vcard-header {
            background-color: #800000;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .vcard-header img.logo {
            display: block;
            margin: 0 auto 10px;
            width: 100px;
        }

        .photo-container {
            background-color: #ddd;
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
            margin: 10px 0;
            font-size: 22px;
        }

        .vcard-header p {
            margin: 5px 0;
            font-size: 14px;
        }

        .separator {
            border-top: 1px solid white;
            margin: 15px 0;
        }

        .vcard-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            position: relative;
        }

        /* Garis pemisah antara tombol */
        .button-separator {
            width: 1px;
            background-color: white;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .vcard-buttons a {
            background-color: #800000;
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 45%;
            transition: background-color 0.3s;
        }

        .vcard-buttons a:hover {
            background-color: #FFD700;
            color: #800000;
        }

        .vcard-buttons i {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .vcard-body {
            padding: 15px;
            color: black;
        }

        .vcard-body .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .vcard-body .info-item i {
            color: #800000;
            margin-right: 10px;
        }

        .vcard-footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }

        .vcard-body a {
            text-decoration: none;
            color: #800000;
        }

        .vcard-body a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .vcard-header h2 {
                font-size: 18px;
            }

            .vcard-buttons a {
                padding: 6px;
                font-size: 10px;
            }

            .vcard-buttons i {
                font-size: 18px;
            }

            .vcard-body .info-item {
                font-size: 12px;
            }
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
                <!-- Garis pemisah antara tombol -->
                <div class="button-separator"></div>
                <a href="https://sda.co.id" target="_blank">
                    <i class="fas fa-globe-asia"></i>
                    Website
                </a>
                <a href="{{ asset('storage/' . $employee->vcf_file) }}" download>
                    <i class="fas fa-user-circle"></i>
                    Save Contact
                </a>
            </div>
        </div>

        <div class="vcard-body">
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <span>{{ $employee->phone }}</span>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <span><a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></span>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>
                    <a href="#" target="_blank">
                        Komp. Margomulyo Indah I Blok A No. 7-8 Jl. Margomulyo Indah I, Balongsari - Tandes, Surabaya 60186, Jawa Timur - Indonesia
                    </a>
                </span>
            </div>
            <div class="info-item">
                <i class="fas fa-globe-asia"></i>
                <span>
                    <a href="http://www.sdaglobal.co.id" target="_blank">www.sdaglobal.co.id</a>
                </span>
            </div>
        </div>

        <div class="vcard-footer">
            &copy; 2024 SDA. All Rights Reserved.
        </div>
    </div>

</body>

</html>
