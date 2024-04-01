<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Voler Admin Dashboard</title>

    <link rel="stylesheet" href={{ asset('assets/css/bootstrap.css') }}>

    <link rel="stylesheet" href={{ asset('assets/vendors/chartjs/Chart.min.css') }}>

    <link rel="stylesheet" href={{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/app.css') }}>
    <link rel="shortcut icon" href={{ asset('assets/images/favicon.svg') }} type="image/x-icon">

</head>

<body>

    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="#"><i data-feather="mail"></i>
                                    Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src={{ asset("assets/images/avatar/avatar-s-1.png") }} alt="" srcset="">
                                </div>
                                    <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                                    <div class="d-none d-md-block d-lg-inline-block">Hi, Client</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="#"><i data-feather="mail"></i>
                                    Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=#><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <script src={{ asset('assets/js/feather-icons/feather.min.js') }}></script>
    <script src={{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('assets/js/app.js') }}></script>

    <script src={{ asset('assets/vendors/chartjs/Chart.min.js') }}></script>
    <script src={{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ asset('assets/js/pages/dashboard.js') }}></script>

    <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>