
@extends('index')
@section('conteudo')
    <script> path = 'js/usuario/form' </script>
    <input id="salvar" value="/usuario/save" type="hidden">
    <input id="id" value="{{$dadosForm->id ?? ''}}" type="hidden">

    <!--======================================================================-->

    <div align="center">
        <h1>Crud Formulário</h1>
    </div> <hr>

    <div class="col-8 m-auto">
        <div class="col-auto">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" value="{{$dadosForm->usuario ?? ''}}">

            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha" value="{{$dadosForm->senha ?? ''}}">

            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" value="{{$dadosForm->nome ?? ''}}">

            <label for="nivelAcesso">Nível de acesso</label>
            <input type="number" class="form-control" id="nivelAcesso" value="{{$dadosForm->nivel_acesso ?? ''}}">

        </div> <br>
        <button type="button" id="enviar" class="btn btn-success">Enviar</button>

    </div>

@endsection
