<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - SDA Global')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Sidebar styling */
        .sidebar {
            background-color: #800020; /* Warna burgundy */
            color: #fff;
            height: 100vh;
            position: fixed;
            width: 250px;
            transition: width 0.3s; /* Smooth transition */
        }

        .sidebar.collapsed {
            width: 60px; /* Width when collapsed */
        }

        .sidebar h2 {
            text-align: center;
            margin: 20px 0;
        }

        .sidebar img {
            width: 100px;
            margin: 20px auto;
            display: block;
            transition: width 0.3s; /* Smooth transition for logo */
        }

        .sidebar.collapsed img {
            width: 40px; /* Smaller logo when collapsed */
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: center;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            font-size: 16px;
        }

        .sidebar ul li a:hover {
            background-color: #6c757d;
        }

        /* Content styling */
        .content {
            margin-left: 260px;
            padding: 20px;
            transition: margin-left 0.3s; /* Smooth transition */
        }

        .content.collapsed {
            margin-left: 70px; /* Adjust content margin when sidebar is collapsed */
        }

        .header {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .header h2 {
            margin: 0;
        }

        .main-content {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Toggle button styling */
        #toggleSidebar {
            position: absolute;
            top: 10px; /* Adjust as necessary */
            left: 100%; /* Position it just outside the sidebar */
            transform: translateX(-100%); /* Shift left */
            z-index: 1000; /* Ensure it’s on top of other elements */
            border: none; /* Remove border */
            background-color: #800020; /* Match sidebar color */
            color: white; /* Text color */
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <button class="btn btn-secondary" id="toggleSidebar">
            <i class="fas fa-chevron-left"></i>
        </button>
        <img src="{{ asset('images/sdastore.png') }}" alt="SDA Global Logo">
        <h2>SDA Global Admin</h2>
        <ul>
            <li><a href="{{ route('employees.index') }}"><i class="fas fa-users"></i> Daftar Karyawan</a></li>
            <li><a href="{{ route('employees.create') }}"><i class="fas fa-user-plus"></i> Tambah Karyawan</a></li>
            <li><a href="{{ url('/vcard-templates') }}"><i class="fas fa-id-card"></i> VCard Templates</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        <div class="header">
            <h2>@yield('header', 'Dashboard')</h2>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Toggle sidebar visibility
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleSidebar.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed'); // Adjust content margin
            toggleSidebar.innerHTML = sidebar.classList.contains('collapsed') ? 
                '<i class="fas fa-chevron-right"></i>' : '<i class="fas fa-chevron-left"></i>';
        });
    </script>
</body>

</html>
