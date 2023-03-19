<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="background-color:#F0FFFF">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="img/pengaduan.png " style="height:100px;"  srcset=""></a>
            </div>

            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li
            class="sidebar-link">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="fa-solid fa-user"></i>
                    <span>Data User</span>
                </a>
            </li>
            <li
            class="sidebar-link">

            <a href="/data_pengaduan" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Data Pengaduan</span>
            </a>
        </li>
        <li
        class="sidebar-link">
        <a href="/hasil" class='sidebar-link' >
            <i class="fa-solid fa-check"></i>
            <span>Hasil Pengaduan</span>
        </a>
    </li>
        <li
        class="sidebar-link">
        <a href="/laporan" class='sidebar-link' >
            <i class="fa-solid fa-check"></i>
            <span>Laporan</span>
        </a>
    </li>




                <form action="/logout" method="post">
                    @csrf
                    <button class='sidebar-link form-control mt-5'>
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <body>

                @yield('content')
            </body>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Akhtar Muhammad Hamdjah</p>
                    </div>

                </div>
            </footer>

    </div>
        </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>s

</body>
</html>
