<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <title>Read</title>
    <meta name="description" content="Sajan Sainju Blog Posts" />

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Radley:400,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="{{ asset('dist/frontend/blog/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dist/frontend/blog/css/style.css') }}">

</head>
<body>


@yield('content')


<section class="footer">
    <div class="footer-inner row">

        <div class="col-md-12">

            <p class="description">
                Sajan Sainju Blog.
            </p>
        </div>
        <div class="col-md-12">
            <a href="">Home</a>&nbsp;&nbsp;
            <a href="">About</a>&nbsp;&nbsp;
            <a href="">Contact</a>&nbsp;&nbsp;

        </div>


    </div>
</section>


<section class="copyright">&copy; 2017</section>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('dist/frontend/blog/js/jquery-1.12.0.min.html') }}"></script>



<script type="text/javascript" src="{{ asset('dist/frontend/blog/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/frontend/blog/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('dist/frontend/blog/js/bootstrap.min.js') }}"></script>

</body>

</html>
