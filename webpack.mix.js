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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

// CSS
mix.copy([
    'resources/css/bootstrap.css'
], 'public/css/bootstrap.css');

mix.copy([
    'node_modules/swiper/swiper-bundle.css'
], 'public/css/swiper-bundle.css')

mix.styles([
    'resources/css/navbar.css',
    'resources/css/font.css',
    'resources/css/override.css',
    'resources/css/home.css',
    'resources/css/work.css',
    'resources/css/project.css',
    'resources/css/about.css',
], 'public/css/all.css');

// JS
mix.copy([
    'resources/js/bootstrap.bundle.js'
], 'public/js/bootstrap.bundle.js');

mix.copy([
    'resources/js/jquery.js'
], 'public/js/jquery.js');

mix.copy([
    'node_modules/swiper/swiper-bundle.js'
], 'public/js/swiper-bundle.js')

// IMAGE
mix.copy([
    'resources/images'
], 'public/images');

// FONT
mix.copy([
    'resources/fonts',
], 'public/fonts')

// ICON
mix.copy([
    'node_modules/bootstrap-icons'
], 'public/bootstrap-icons')
