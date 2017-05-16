const { mix } = require('laravel-mix');

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.webpackConfig({
  plugins: [
    new BrowserSyncPlugin({
      open: 'external',
      host: 'bayer.dev',
      proxy: 'bayer.dev',
      files: ['resources/views/**/*.php', 'app/**/*.php', 'routes/**/*.php']
    })
    ]
});

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
   .sass('resources/assets/sass/app.scss', 'public/css')

   // .copy('node_modules/fullpage.js/dist/jquery.fullpage.min.js', 'public/js/fullPage')
   // .copy('node_modules/fullpage.js/vendors/jquery.slimscroll.min.js', 'public/js/fullPage')

   .scripts([
		'node_modules/fullpage.js/dist/jquery.fullpage.min.js',
		'node_modules/fullpage.js/vendors/jquery.slimscroll.min.js',
		'node_modules/slick-carousel/slick/slick.min.js'
   	], 'public/js/vendor.js')

   // .copy('node_modules/fullpage.js/dist/jquery.fullpage.min.css', 'public/css/fullPage')

   .styles([
		'node_modules/fullpage.js/dist/jquery.fullpage.min.css',
		'node_modules/slick-carousel/slick/slick.css',
		'node_modules/slick-carousel/slick/slick-theme.css'
   	], 'public/css/vendor.css')

   .sass('resources/assets/sass/landing.scss', 'public/css/landing.css')
   
   .copy('resources/assets/images', 'public/images')
   .version();

