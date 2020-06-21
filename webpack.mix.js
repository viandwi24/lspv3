const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const autoprefixer = require('autoprefixer');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/vendor.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ autoprefixer, tailwindcss('./tailwind.config.js') ],
        hmrOptions: {
            host: 'lspv3.test',
            port: 8080
        }
    })
    .webpackConfig({
        devServer: {
            publicPath: "/",
            compress: true,
            hot: true,
            inline: true
        }
    });
