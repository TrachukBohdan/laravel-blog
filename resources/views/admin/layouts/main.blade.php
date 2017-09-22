<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS-->
        <link href="{{asset('themes/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{asset('themes/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{asset('themes/admin/css/sb-admin.css')}}" rel="stylesheet">

        @yield('custom-header-assets')

    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->

        @include('admin.parts.navbar')

        <div class="content-wrapper">

            <div class="container-fluid">

                {{--@include('admin.parts.breadcrumbs')--}}

                @yield('content')

            </div>

            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            @include('admin.parts.footer')

            <!-- Scroll to Top Button-->
            @include('admin.parts.scroll-top-btn')

            @include('admin.parts.logout-modal')

            <!-- Bootstrap core JavaScript-->
            <script src="{{asset('themes/admin/vendor/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('themes/admin/vendor/popper/popper.min.js')}}"></script>
            <script src="{{asset('themes/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <!-- Core plugin JavaScript-->
            <script src="{{asset('themes/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
            <!-- Custom scripts for all pages-->
            <script src="{{asset('themes/admin/js/sb-admin.min.js')}}"></script>

            @yield('custom-footer-assets')

        </div>

    </body>

</html>