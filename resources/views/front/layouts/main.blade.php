<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/themes/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/themes/front/css/blog-home.css')}}" rel="stylesheet">

    @yield('custom-header-assets')

</head>

    <body>

        @include('front.parts.navbar')

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    @yield('content')

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">
                    @include('front.parts.side-widget')
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        @include('front.parts.footer')

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('themes/front/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('themes/front/vendor/popper/popper.min.js')}}"></script>
        <script src="{{asset('themes/front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        @yield('custom-footer-assets')

    </body>

</html>
