<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

        <title>Laravel Blog</title>

        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://bootflat.github.io/bootflat/css/bootflat.css">

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- Bootflat's JS files.-->
        <script src="https://bootflat.github.io/bootflat/js/icheck.min.js"></script>
        <script src="https://bootflat.github.io/bootflat/js/jquery.fs.selecter.min.js"></script>
        <script src="https://bootflat.github.io/bootflat/js/jquery.fs.stepper.min.js"></script>

        <!-- Custom styles for this template -->
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>

        @include('layouts.nav')

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
            
                @yield('content')

            </div>

            @include('layouts.sidebar')

        </div>

    </div>

        @include('layouts.footer')

    </body>

</html>