<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Teste</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/bootstrap/js/bootstrap.js')}}">
        <link rel="stylesheet" href="{{asset('assets/appCss/app.css')}}">


    </head>

    <body>

    <!--========================================================================-->
    <!--Conteúdo-->
    @yield('conteudo')

    <!--========================================================================-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
    </script>

    <script src="{{asset('assets/appJs/app.js')}}"></script>

    </body>

</html>
