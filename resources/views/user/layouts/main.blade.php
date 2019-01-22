<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/bootstrap.min.css') !!}" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- Sidebar Style CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/sidebar.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/vendor/lightcase/css/lightcase.css') !!}" >

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

    <!-- Font Awesome JS -->
    <script defer src="{!! asset('assets/vendor/fontawesome/solid.js') !!}"></script>
    <script defer src="{!! asset('assets/vendor/fontawesome/fontawesome.js') !!}"></script>

</head>

<body id="dashboard">

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Vocomfest</h3>
                <strong>VC</strong>
            </div>

            @yield('menu')
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-custom">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>

                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <button class="btn btn-danger">Logout</button>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content Box -->
           @yield('content')
             <!-- End Content Box -->
        </div>
    </div>

    <!-- jQuery  -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Popper.JS -->
    <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
    <!-- Bootstrap JS -->
    <script src="{!! asset('assets/vendor/bootstrap/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/lightcase/js/lightcase.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/vendor/tinymce/tinymce.min.js') !!}" ></script>
    <script type="text/javascript" src="{!! asset('assets/vendor/tinymce/init-tinymce.js') !!}" ></script>
    <script src="{!! asset('assets/js//main.js') !!}"></script>

    <!-- DataTables -->
    <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    @stack('scripts')


</body>

</html>
