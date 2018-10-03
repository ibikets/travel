let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'resources/assets/plugins/bootstrap/css/bootstrap.css',
    'resources/assets/plugins/node-waves/waves.css',
    'resources/assets/plugins/animate-css/animate.css',
    'resources/assets/plugins/morrisjs/morris.css',
    'resources/assets/css/style.css',
    'resources/assets/css/themes/all-themes.css',

],'public/css/lib.css');