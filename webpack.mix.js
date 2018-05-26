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

 mix.combine(['public/js/axios.min.js', 'public/js/autosize.min.js', 'resources/assets/js/remodal.js', 'resources/assets/js/app.js', 'public/js/vue.js', 'resources/assets/js/vues/*.js', 'resources/assets/js/utils.js'], 'public/js/app.js')
   .sass('resources/assets/sass/style.scss', 'public/css').options({
       processCssUrls: false
    });
