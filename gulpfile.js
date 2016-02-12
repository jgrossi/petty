var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less('styles.less', 'public/assets/styles.css');
    //mix.scripts([
    //    './public/assets/js/jquery.js',
    //    './public/assets/js/app.js'
    //], './public/assets/scripts.js');
});