const mix1 = require('laravel-mix');
var LiveReloadPlugin = require('webpack-livereload-plugin');


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



 mix1.js('src/app.js', 'dist').setPublicPath('dist');
 mix1.webpackConfig({
    plugins: [new LiveReloadPlugin()]
});
