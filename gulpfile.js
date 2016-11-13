process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir es la manera correcta de pasar archivos css y js a la carpeta public
elixir(function(mix) {

    //compila sass files en css files y los ubica en la carpeta especificada
    mix.sass([
        'app.scss',
        '../../../node_modules/bootstrap-sass/assets/stylesheets/_bootstrap.scss',
    ], 'public/assets/css/app.min.css');

    //mix.scripts mezcla los archivos js que necesitemos en uno solo
    // (esto es bueno para optimizar javascripts que necesitemos
    //en este caso estamos mezclando jquery y boostrap y un archivo app.js de laravel
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',
        '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'resources/assets/js/app.js',
    ], 'public/assets/js/app.min.js');

    //para prevenir problemas de cache, cada que corremos gulp se genera una nueva version, crea una nueva carpeta build
    mix.version([
        'assets/css/app.min.css',
        'assets/js/app.min.js',
    ]);
});

//para produccion se correra gulp con el flag de produccion gulp --production esto genera archivos minimizados de js y css
