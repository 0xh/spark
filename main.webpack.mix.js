let mix = require('laravel-mix');
var path = require('path');

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

// mix.less('resources/assets/less/app.less', 'public/css')
//    .copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.min.js')
//    .copy('node_modules/sweetalert/dist/sweetalert.css', 'public/css/sweetalert.css')
//    .js('resources/assets/js/app.js', 'public/js')
//    .webpackConfig({
//         resolve: {
//             modules: [
//                 path.resolve(__dirname, 'vendor/laravel/spark/resources/assets/js'),
//                 'node_modules'
//             ],
//             alias: {
//                 'vue$': 'vue/dist/vue.js'
//             }
//         }
//    });

// Use this To compile all CSS about Metro Ui to All.css
mix.styles([
    // This are Core Metro Ui CSS
    'public/metro/css/metro.css',
    'public/metro/css/metro-icons.css',
    'public/metro/css/metro-responsive.css',
    'public/metro/css/metro-schemes.css',
    'public/metro/css/metro-colors.css',
    'public/metro/css/metroskin-animation.css',
    'public/metro/css/font-awesome.css',
    'public/metro/plugins/bootstrap/css/bootstrap.metro.css',
    'public/metro/css/help.css',
    // This are Core Metro Ui CSS
    'public/metro/css/parsley.css',
    // 'public/metro/plugins/nanoscroller/css/nanoscroller.css',
    // images light box css
    // 'public/metro/plugins/lightbox/css/lightbox.css',
    // this has all the built in class in the example
    'public/metro/css/docs.css',
    // allows you to toggle rtl
    'public/metro/css/docs-rtl.css',
], 'public/css/main.css');

// // Use this to compile All js Library use in Metro Ui
mix.scripts([
    //adding IDE style behaviors to plain text areas
    // 'public/metro/plugins/tabbehave/behave.js',
    // 'public/metro/plugins/tabbehave/behave.helper.js',
    'public/metro/js/jquery-2.1.3.min.js',
    'public/metro/js/metro.js',
    // this is about modal tooltip ...
    // 'public/metro/plugins/bootstrap/js/bootstrap.js',
    'public/metro/plugins/jquery-ui.min.js',
    // 'public/metro/plugins/parsley.js',
    // implementing Lion OS scrollbars
    // 'public/metro/plugins/nanoscroller/js/jquery.nanoscroller.js',
    // this is for SELECT tags
    // 'public/metro/plugins/jquery.jCombo.min.js',
    // 'public/metro/js/select2.min.js',
    // 'public/metro/js/preCode.js',
    // use for submiting ajax request
    // 'public/metro/js/jquery.form.js',
    // for images light box
    // 'public/metro/plugins/fancybox/jquery.fancybox.pack.js',
    // for counting up
    // 'public/metro/plugins/countup/countUp.min.js',
    // use for submiting ajax request
    // 'public/metro/plugins/jquery-form/jquery.form.js',
    // Make an element revealable
    // 'public/metro/js/wow.min.js',
    // Not Needed its on for the dashboard
    // 'public/metro/js/web.js',
], 'public/js/main.js');