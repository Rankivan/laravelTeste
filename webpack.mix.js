const mix = require('laravel-mix');

    //Webpack de arquivos JS
    mix.js('resources/views/js/global/global.js', 'public/assets/appJs/app.js');
    mix.js('resources/views/js/usuario/form.js', 'public/assets/appJs/app.js');
    mix.js('resources/views/js/usuario/index.js', 'public/assets/appJs/app.js');

    //Webpack de arquivos CSS
    mix.css('resources/views/css/global/loadding.css',     'public/assets/appCss/app.css');

