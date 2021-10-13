<?php

namespace App\Http\Controllers;

use App\Http\Service\UsuarioService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(UsuarioService $usuarioService)
    {
        $dado = $usuarioService->listagem();
        return view('templates/usuario/index', ['dado' => $dado]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function form(UsuarioService $usuarioService, $id)
    {
        $dados = $usuarioService->getDadosForm($id);
        return view('templates/usuario/form', ['dadosForm' => $dados]);
    }


    /**
     * @param Request $request
     */
    public function save(Request $request, UsuarioService $usuarioService)
    {
        try {
            $usuarioService->save($request);
            return Response::HTTP_OK;

        } catch (\Exception $exception) {
            return Response::HTTP_PRECONDITION_FAILED;
        }

    }

    /**
     * @param UsuarioService $usuarioService
     * @return mixed
     */
    public function delete(UsuarioService $usuarioService)
    {

        $dado = $usuarioService->delete();
        return $dado;

    }
}
