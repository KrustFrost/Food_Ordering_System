const mix = require('laravel-mix');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/pay.js', 'public/js')
mix.js('resources/js/submit.js', 'public/js')
mix.js('resources/js/three.js', 'public/js')
mix.css('resources/css/receipt.css', 'public/css')
mix.css('resources/css/userorders.css', 'public/css')
mix.css('resources/css/tablestyle.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);