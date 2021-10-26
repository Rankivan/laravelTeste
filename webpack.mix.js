const mix = require('laravel-mix');

    //Webpack de arquivos JS
    mix.js('resources/views/js/global/global.js', 'assets/appJs/app.js');
    mix.js('resources/views/js/usuario/form.js', 'assets/appJs/app.js');
    mix.js('resources/views/js/usuario/index.js', 'assets/appJs/app.js');

    //Webpack de arquivos CSS
    mix.css('resources/views/css/global/loadding.css',     'assets/appCss/app.css');

