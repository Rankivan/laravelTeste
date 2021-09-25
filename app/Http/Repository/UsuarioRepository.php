<?php

namespace App\Http\Repository;

use App\Http\Models\Entity\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioRepository
{

    /**
     * @param Usuario $usuario
     */
    public function __construct(Usuario $usuario)
    {
      $this->usuario = $usuario;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function listUsers()
    {
        $usuarios = DB::table('usuario as u')
            ->select('u.id', 'u.usuario', 'u.nome', 'na.role')
            ->join('nivel_acesso as na', 'na.id', '=', 'u.nivel_acesso')
            ->where('u.removido', '=', '0')
            ->paginate(2);

        return $usuarios;
    }

}
