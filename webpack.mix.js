const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js/')
    .sass('resources/assets/sass/app.scss', 'public/css/');


mix.styles([

           'libs/animate.css',
           'libs/animations.css',
           'libs/app.css',
           'libs/bootstrap-theme.css',           
           'libs/bootstrap.css',                    
           'libs/custom.css',
           'libs/font-awesome.min.css',
           'libs/head-custom.css',
           'libs/sb-admin-2.css',           
           'libs/sticky.css',
           'libs/style.css',



       ], './public/css/libs.css');


mix.scripts([

    'libs/app.js',
    'libs/bootstrap.js',
    'libs/custom.js',
    'libs/gmap.js',
    'libs/ipad.js',
    'libs/jquery.form.min.js',
    'libs/jquery.min.js',
    'libs/jquery.pjax.js',
    'libs/jquery.slim.min.js',
    'libs/myform.js',
    'libs/sb-admin-2.js',
    'libs/sb-admin-2.min.js',
    'libs/sticky.js',
    'libs/template.js',


], './public/js/libs.js');

mix.scripts([

    '/plugins/jquery.appear.js',
    '/plugins/jquery.backstretch.min.js',           
    '/plugins/modernizr.js',
    '/plugins/libs3/jquery.js',


], './public/js/plugins/plugins.js');


mix.scripts([

    '/libs/isotope.pkgd.js',

], './public/js/plugins/isotope/isotope.js');








// const { mix } = require('laravel-mix');

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');



// mix.styles([
//     'resources/assets/css/libs/blog-post.css',
//     'resources/assets/css/libs/bootstrap.css',
//     'resources/assets/css/libs/font-awesome.css',
//     'resources/assets/css/libs/metisMenu.css',
//     'resources/assets/css/libs/sb-admin-2.css'

// ], 'public/css/libs.css');

// mix.scripts([
//     'resources/assets/js/libs/jquery.js',
//     'resources/assets/js/libs/bootstrap.js',
//     'resources/assets/js/libs/metisMenu.js',
//     'resources/assets/js/sb-admin-2.js',
//     'resources/assets/js/libs/jquery.js',
//     'resources/assets/js/libs/scripts.js'

// ], 'public/js/libs.js');
