let mix = require('laravel-mix');
const webpack = require('webpack');

mix
  .js('assets/src/js/app.js', 'assets/dist/js/app.js')
  .sass('assets/src/scss/main.scss', 'assets/dist/css/style.css')
  .browserSync('http://localhost/ascensor-assessment/');
