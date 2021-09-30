const mix = require('laravel-mix');

    //Webpack de arquivos JS
    mix.js('resources/views/js/configHttp/configHttp.js', 'public/assets/appJs/app.js');
    mix.js('resources/views/js/teste_js/teste.js', 'public/assets/appJs/app.js');

    //Webpack de arquivos CSS
    mix.css('resources/views/css/teste.css',     'public/assets/appCss/app.css');
    mix.css('resources/views/css/testeCor.css',  'public/assets/appCss/app.css');
