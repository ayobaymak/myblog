<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>XerXes</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">

    <!-- Custom styles for this template -->
    <link type="text/css" href="{{URL::asset('css/blog.css')}}" rel="stylesheet">
    <link type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
</head>

<body>

@include('partials.nav')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">XerXes</h1>
        <p class="lead blog-description">Home of the hottest gist</p>
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            @yield('content')


        </div><!-- /.blog-main -->

        @include('partials.sidebar2')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('partials.footer')
</body>
</html>
