
@extends('.index')
@section('conteudo')

    <input id="createTeste" value="/create">

    <div align="center">
        <h1>Crud Formulário</h1>
    </div> <hr>

    <div class="col-8 m-auto">
        <div class="col-auto">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario">

            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha">

            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome">

            <label for="nivelAcesso">Nível de acesso</label>
            <input type="text" class="form-control" id="nivelAcesso">

        </div> <br>
        <button type="button" id="enviar" class="btn btn-success">Enviar</button>

    </div>

@endsection
