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
            <h1>Petty URL Shortener</h1>
            <p class="lead">
                Your own URL Shortener <br>
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
            &copy; 2016 <a href="http://github.com/jgrossi/petty">Petty URL Shortener</a>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>