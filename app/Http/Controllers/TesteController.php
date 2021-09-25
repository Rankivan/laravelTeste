<?php

namespace App\Http\Controllers;




use App\Http\Repository\UsuarioRepository;
use App\Http\Service\TesteService;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(TesteService $testeService)
    {
        $dado = $testeService->listagem();
        return view('templates/index', compact('dado'));
    }


    /**
     * @param TesteService $testeService
     * @return mixed
     */
    public function create(TesteService $testeService)
    {

        $dado = $testeService->create();
        return $dado;

    }

    /**
     * @param TesteService $testeService
     * @return mixed
     */
    public function update(TesteService $testeService)
    {

        $dado = $testeService->update();
        return $dado;

    }

    /**
     * @param TesteService $testeService
     * @return mixed
     */
    public function delete(TesteService $testeService)
    {

        $dado = $testeService->delete();
        return $dado;

    }
}
