<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// Esta validação serve para definir a url das rotas.
// Se produção for verdadeiro, usa-se a rota do servidor.
$producao = false;
if ($producao) {
    $GLOBALS["url"] = '/testes/laravelTeste';
} else {
    $GLOBALS["url"] = null;
}
//=========================================================

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
