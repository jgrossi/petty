<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petty URL Shortener</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="header text-center">
            <a href="#" class="avatar">
                <img src="{{ asset(config('petty.avatar')) }}" alt="" class="img-responsive">
            </a>
            <h1>{{ config('petty.name') }}</h1>
            <p class="lead">
                URL Shortener by <a href="#">Petty</a><br>
                <code>http://jgro.me</code>
            </p>
            <ul class="nav nav-tabs nav-main">
                <li class="active"><a href="#">New URL</a></li>
                <li><a href="#">Generated URLs</a></li>
            </ul>
        </div>
        <div class="body text-center">
            @yield('content')
        </div>
        <div class="footer text-center">
            &copy; 2016 | URL Shortener by <a href="http://github.com/jgrossi/petty">Petty</a> |
            Avatar by <a href="http://www.freepik.com/free-photos-vectors/man">Freepik</a>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>