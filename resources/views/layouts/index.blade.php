<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.common.head')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('layouts.common.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('layouts.common.nav')
                @yield('content')
            </div>
            @include('layouts.common.footer')
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('backend/auth/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/auth/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('backend/auth/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('backend/auth/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/auth/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/auth/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>