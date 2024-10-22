<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard SDA')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
        }

        @media (min-width: 992px) {
            .sidebar-menu {
                width: 250px;
                height: 100vh;
            }
        }

        /* Sidebar styling */
        .sidebar-menu {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            border-right: 2px solid #343a40;
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar-menu a {
            color: #ffffff;
            text-decoration: none;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s, color 0.3s;
            font-weight: 500;
        }

        .sidebar-menu a:hover {
            background-color: #495057;
            color: #ffffff;
        }

        .sidebar-menu i {
            font-size: 1.2rem;
            margin-right: 15px;
        }

        .navbar-toggler {
            border: none;
        }

        .admin-text {
            font-size: 1.5rem;
            color: #950000;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }

        /* Card for content */
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Button styles */
        .btn {
            transition: background-color 0.3s, transform 0.3s;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #444;
            transform: scale(1.05);
        }

    </style>
</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">
        <div class="row g-0">

            <!-- Sidebar -->
            <div class="col-12 col-lg-auto">
                <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
                    <div class="offcanvas-header">
                        <a href="#" class="navbar-brand me-3">
                            <img src="{{ asset('images/sda.png') }}" alt="LOGO" width="130">
                        </a>
                        <button type="button" class="btn-close ms-auto" data-bs-toggle="offcanvas" data-bs-target="#sidebar"></button>
                    </div>

                    <span class="admin-text d-none d-lg-block">Admin SDA</span>

                    <!-- Sidebar Menu -->
                    <div class="offcanvas-body sidebar-menu">
                        <a href="{{ route('employees.create') }}" class="d-flex align-items-center">
                            <i class="bi bi-person-plus-fill"></i>
                            Tambah Kartu Nama
                        </a>
                        <a href="{{ route('employees.index') }}" class="d-flex align-items-center">
                            <i class="bi bi-card-list"></i>
                            Daftar Kartu Nama
                        </a>
                        <a href="https://sdaglobal.co.id" target="_blank" class="d-flex align-items-center">
                            <i class="bi bi-info-circle-fill"></i>
                            Informasi SDA Store
                        </a>
                        <hr class="text-white">
                        <a href="http://127.0.0.1:8000/#contact" class="d-flex align-items-center">
                            <i class="bi bi-house-door"></i>
                            Beranda
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <i class="bi bi-gear-fill"></i>
                            Pengaturan
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <i class="bi bi-chat-dots"></i>
                            Pesan
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <i class="bi bi-person-circle"></i>
                            Profil
                        </a>
                        <a href="http://127.0.0.1:8000/" class="d-flex align-items-center">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="col-12 col-lg" style="background-color: #ffffff;">
                <nav class="navbar navbar-expand-lg bg-body-secondary mb-4">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="#" class="navbar-brand ms-auto d-none d-lg-inline">
                            <img src="{{ asset('images/sda.png') }}" alt="LOGO" width="50">
                        </a>
                    </div>
                </nav>

                <!-- Content Section -->
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <!-- End Main Content -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
