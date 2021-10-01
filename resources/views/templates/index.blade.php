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
                    <td>
                        <a href="{{ url('/delete/' . $dados->id) }}" id="btn-delete" type="button" class="btn btn-danger"> Excluir </a>
                        <a href="{{ url('/form/' . $dados->id) }}" id="btn-update" type="button" class="btn btn-primary"> Editar </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            {{$dado->links( "pagination::bootstrap-4" )}}
        </div>

        <div>
            <a href="{{ url('/form/null') }}" id="btn-create" type="button" class="btn btn-success"> Cadastrar </a>
        </div>




        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div align="center" class="positionLoadding" >
                    <div class="cube">
                        <div class="cubeFace"></div>
                        <div class="cubeFace face2"></div>
                    </div>
                    <br><br>
                    <div>
                        <h1
                            style="color: #fff">Carregando
                            <y class="ponto1">.</y>
                            <y class="ponto1">.</y>
                            <y class="ponto1">.</y>
                        </h1>
                    </div>

                </div>

            </div>
        </div>
</div>


    <style>

        .ponto1 {
            animation-duration:0.75s ;
        }
        .ponto2 {

        }
        .ponto3 {

        }

        .positionLoadding{
            height: 300px; width: 300px;
            position:absolute;
            left:47%;
            top:50%;
            margin-left:-110px;
            margin-top:50%;
        }

        .cube {
            padding-bottom:20%;
            transform-style: preserve-3d;
            transform-Origin: 50% 100%;
            transform:rotateY(45deg) rotateX(0);
            border-radius: 20%;
            animation: is-rotating 3s infinite;
        }
        .cubeFace {
            position: absolute;
            left:40%;top:0;
            width: 20%;height:100%;
            margin: 0 auto;
            transform-style: inherit;
            background: #fd7e14;
            box-shadow:inset 0 0 0 3px #1a202c;
            transform-Origin:50% 50%;
            transform: rotateX(90deg);
            backface-visibility:hidden;
        }
        .face2{
            transform-Origin:50% 50%;
            transform: rotatez(90deg) translateX(100%) rotateY(90deg);
        }
        .cubeFace:before, .cubeFace:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            transform-Origin:0 0;
            background: inherit;
            box-shadow:inherit;
            backface-visibility:inherit;
        }
        .cubeFace:before {
            top: 100%; left: 0;
            transform: rotateX(-90deg);
        }
        .cubeFace:after {
            top: 0; left: 100%;
            transform: rotateY(90deg);
        }

        @keyframes is-rotating {
            to {
                transform:rotateY(405deg) rotateX(360deg);
            }
        }

        @keyframes hidden {
            to {
                transform:;
            }
        }
    </style>

@endsection
