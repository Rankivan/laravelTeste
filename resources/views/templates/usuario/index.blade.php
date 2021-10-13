@extends('index')
@section('conteudo')
    <div id="contudo">
        <div align="center">
            <h1>Crud teste</h1>
        </div>
        <hr>

        <div class="col-8 m-auto">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Nível Acesso</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dado as $dados)
                    <tr>
                        <th scope="row">1</th>
                        <td>  {{$dados->id}} </td>
                        <td>  {{$dados->nome}}</td>
                        <td>  {{$dados->usuario}}</td>
                        <td>  {{$dados->role}}</td>
                        <td>
                            <a href="{{ url('usuario/delete/' . $dados->id) }}" id="btn-delete" type="button"
                               class="btn btn-danger"> Excluir </a>
                            <a href="{{ url('usuario/form/' . $dados->id) }}" id="btn-update" type="button"
                               class="btn btn-primary"> Editar </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div>
                {{$dado->links( "pagination::bootstrap-4" )}}
            </div>

            <div>
                <a href="{{ url('usuario/form/null') }}" id="btn-create" type="button" class="btn btn-success"> Cadastrar </a>
            </div>

        </div>
    </div>

@endsection
