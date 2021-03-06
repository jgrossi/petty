var elixir = require('laravel-elixir');

elixir(function(mix) {

    // Less CSS files
    mix.less('styles.less', './public/css/styles.css');

    // Javascript files
    mix.scripts([
        './bower_components/jquery/jquery.js',
        './bower_components/bootstrap/dist/js/bootstrap.js',
        './bower_components/clipboard/dist/clipboard.js',
        './bower_components/jquery-ujs/src/rails.js',
        'app.js'
    ], './public/js/scripts.js');

    // Copy Font-Awesome fonts
    mix.copy(
        './bower_components/components-font-awesome/fonts',
        'public/fonts'
    );

});