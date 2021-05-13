const mix = require('laravel-mix')
require('laravel-mix-pluton')

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

mix
  .pluton('wp-content/themes/easyspacy/resources/js/parts')
  .js(
    'wp-content/themes/easyspacy/resources/js/app.js',
    'wp-content/themes/easyspacy/public/js'
  )
  .sass(
    'wp-content/themes/easyspacy/resources/sass/theme.scss',
    'wp-content/themes/easyspacy/public/css'
  )
  .copy(
    'wp-content/themes/easyspacy/resources/img',
    'wp-content/themes/easyspacy/public/img'
  )
/* .browserSync({
    proxy: 'project.localhost',
    notify: false,
  }) */
