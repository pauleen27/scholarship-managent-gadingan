<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Scholarship Management System')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f8f5;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #174A7E;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 15px;
        }

        .sidebar h4 {
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 35px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #B42332;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 18px 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px #174A7E;
        }

        .content-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h4>
            🎓 Scholarship<br>
            Management System
        </h4>

        <a href="{{ route('applicants.index') }}">
            🏠 Dashboard
        </a>

        <a href="{{ route('applicants.index') }}">
            👨‍🎓 Applicants
        </a>

        <a href="#">
            📚 Scholarship Programs
        </a>

        <a href="#">
            📋 Application Records
        </a>

        <a href="#">
            📊 Reports
        </a>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <div class="topbar d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">
                @yield('page-heading', 'Dashboard')
            </h5>

            <span class="text-muted">
                Scholarship Administrator
            </span>
        </div>

        <div>
            @yield('content')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>
