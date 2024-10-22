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
            overflow-x: hidden; /* iki gawe scrol sing horizontal e catatt */
        }

        /* Sidebar tak gawe model ndek kene, cubo cubo ae gawe belajar*/
        .sidebar {
            background-color: rgba(139, 5, 0); /* Fungsi ne gawe efect transparan jare google, gawe RGBA */
            color: #ffffff;
            height: 100vh;
            padding: 20px;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            position: fixed;
            top: 0;
            left: 0;
            width: 220px; /* Adjusted width */
            z-index: 1000;
            border-right: 2px solid #DEB887; /* iki broder e */
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px; /* padding gawe jarak */
            display: flex;
            align-items: center;
            border-radius: 8px; /* Make corners round */
            margin-bottom: 10px; /* Decreased margin */
            transition: background-color 0.3s, transform 0.2s;
            font-weight: 450;
            font-size: 1.0rem; /* deleh font size */
        }

        .sidebar a:hover {
            background-color: #A52A2A;
            transform: scale(1.05); /* Slightly ukuran e hover */
        }

        .sidebar i {
            font-size: 1.5rem; /* kene tak deleh icon size */
            margin-right: 10px; /* Aspace gawe jarak tect eben masuk */
            transition: color 0.3s; /* Smooth color transition */
        }

        .sidebar a:hover i {
            color: #D3D3D3; /* hoper gawe effect nek arep di pejet */
        }

        .navbar-toggler {
            border: none;
        }

        /* iki gawe responsif antar mobile karo pc */
        @media (min-width: 992px) {
            .sidebar {
                transform: translateX(0);
                position: relative;
                height: auto;
            }

            .main-content {
                margin-left: 220px; /* Adjust space for the sidebar */
            }

            .navbar-toggler {
                display: none; /* Hide the toggle button on larger screens */
            }
        }

        /* Styles for main content */
        .main-content {
            transition: margin-left 0.3s ease;
            padding: 20px;
            background-color: #ffffff;
            min-height: 100vh; /* Ensure it takes full height */
            margin-left: 0; /* Reset margin */
        }

        /* button model e*/
        .close-btn {
            display: none;
        }

        @media (max-width: 991px) {
            .close-btn {
                display: block;
                margin-left: auto;
            }
        }
    </style>
</head>

<body>

    <!-- Wrapper -->
    <div class="wrapper">
        <div class="row g-0">

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="d-flex align-items-center">
                    <a href="#" class="navbar-brand me-3">
                        <img src="{{ asset('images/sdastore.png') }}" alt="LOGO" width="130">
                    </a>
                    <button type="button" class="btn-close close-btn" id="closeSidebar"></button>
                    </style>
                </div>


                <!-- Sidebar Menu -->
                <div>
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
                    <a href="http://127.0.0.1:8000" class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </a>
                </div>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="col-12 col-lg main-content" id="mainContent">
                <nav class="navbar navbar-expand-lg bg-body-secondary mb-4">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" id="toggleSidebar">
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
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        });

        document.getElementById('closeSidebar').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.remove('show');
        });
    </script>
</body>

</html>
