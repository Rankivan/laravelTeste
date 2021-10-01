<?php

namespace App\Http\Service;

use App\Http\Repository\UsuarioRepository;
use Illuminate\Http\Request;
use SplFixedArray;

class TesteService
{

    /**
     * @param UsuarioRepository $usuarioRepository
     */
    public function __construct (UsuarioRepository $usuarioRepository)
    {
         $this->usuarioRepository = $usuarioRepository;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function listagem()
    {
      $dados = $this->usuarioRepository->listUsers();

      return $dados;
    }


    public function getDadosForm($id)
    {
        $dados = $this->usuarioRepository->getDadosById($id);
        return $dados;
    }

    /**
     * @param Request $request
     */
    public function save(Request $request)
    {
        $dados   = $request->request->all();
        $usuario = $this->usuarioRepository->usuario;

        if ($dados['id']) {
            $result = $usuario->updateUsuario($dados['id'], [
                'usuario'       => $dados['usuario'],
                'senha'         => $dados['senha'],
                'nome'          => $dados['nome'],
                'nivel_acesso'  => $dados['nivelAcesso']
            ]);

        } else {

            $result  = $usuario->setUsuario([
                'usuario'      =>$dados['usuario'],
                'senha'        =>$dados['senha'],
                'nome'         =>$dados['nome'],
                'nivel_acesso' =>$dados['nivelAcesso']
            ]);

        }

        return $result;
    }


    public function delete()
    {

    }


}
