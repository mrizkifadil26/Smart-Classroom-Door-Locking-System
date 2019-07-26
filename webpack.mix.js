const mix = require('laravel-mix');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

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

mix.webpackConfig({
   plugins: [
      new CleanWebpackPlugin(),
   ],
   output: {
      path: path.join(__dirname, 'public/assets')
   }
});


/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 */

mix.setResourceRoot('../');
mix.sass('resources/sass/app/main.scss', 'app/main.css').version();
mix.js('resources/js/app/main.js', 'app/main.js').version();

/*
 |--------------------------------------------------------------------------
 | Home
 |--------------------------------------------------------------------------
 |
 */

mix.sass('resources/sass/home/home.scss', 'home/home.css').version();
mix.js('resources/js/home/home.js', 'home/home.js').version();

/*
 |--------------------------------------------------------------------------
 | Auth
 |--------------------------------------------------------------------------
 |
 */

mix.sass('resources/sass/auth/auth.scss', 'auth/auth.css').version();
mix.js('resources/js/auth/auth.js', 'auth/auth.js').version();