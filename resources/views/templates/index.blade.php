@extends('.index')
@section('conteudo')

    <div align="center">
        <h1>Crud teste</h1>
    </div> <hr>

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
                    <td><a href="{{ url('/delete') }}"  type="button" class="btn btn-danger"> Excluir </a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <div>
            {{$dado->links( "pagination::bootstrap-4" )}}
        </div>

    </div>





@endsection
