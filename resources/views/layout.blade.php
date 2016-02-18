<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petty URL Shortener</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div id="header"></div>
    <div class="container @yield('container')">
        <div class="header text-center">
            <a href="#" class="avatar">
                <img src="{{ asset(config('petty.avatar')) }}" alt="" class="img-responsive">
            </a>
            <h1>{{ config('petty.name') }}</h1>
            <p class="lead">
                URL Shortener by <a href="#">Petty</a><br>
                <code>{{ config('petty.domain') }}</code>
            </p>
            <ul class="nav nav-tabs nav-main">
                <li class="active"><a href="{{ route('url.create') }}">New URL</a></li>
                <li><a href="{{ route('url.index') }}">Generated URLs</a></li>
            </ul>
        </div>
        <div class="body text-center">
            @yield('content')
        </div>
        <div class="footer text-center">
            &copy; 2016 | Made with &#9829; by
            <a href="http://jgrossi.com" target="_blank">Junior Grossi</a><br>
            Get the code on <a href="http://github.com/jgrossi/petty">GitHub</a> |
            Avatar by <a href="http://www.freepik.com/free-photos-vectors/man">Freepik</a>
        </div>
    </div>
    <script type="application/javascript">var fullUrl = '{{ request()->url() }}';</script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>