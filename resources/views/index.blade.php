<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Teste</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/appCss/app.css')}}">

    </head>

    <body>

        <!--========================================================================-->

        @include('messages.retorno.retorno')
        <!--Conteúdo-->
        @yield('conteudo')

        <!--========================================================================-->

        <!--Js do Bootstrap-->
        <script rel="stylesheet" src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>

        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.js"
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous">
        </script>

        <!--Meu Js-->
        <script src="{{asset('assets/appJs/app.js')}}"></script>

    </body>
</html>
