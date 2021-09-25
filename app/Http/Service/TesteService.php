<?php

namespace App\Http\Service;

use App\Http\Repository\UsuarioRepository;
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

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


}
