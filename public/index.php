<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Petty URL Shortener</title>
    <link rel="stylesheet" href="./assets/styles.css">
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
                <li><a href="#">Previous URLs</a></li>
            </ul>
        </div>
        <div class="body text-center">
            <form action="" method="GET">
                <div class="form-group">
                    <input type="email" class="form-control" id="url" placeholder="http://example.com">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">
                        Short it!
                    </button>
                </div>
            </form>
            <div class="well well-sm well-url">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" value="http://jgro.me/Inx7">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">Copy!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer text-center">
            &copy; 2016 <a href="http://github.com/jgrossi/petty">Petty URL Shortener</a>
        </div>
    </div>
</body>
</html>