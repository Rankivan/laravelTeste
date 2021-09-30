<?php

namespace App\Http\Controllers;

use App\Http\Service\TesteService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


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
        return view('templates/index', ['dado' => $dado]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function form(TesteService $testeService, $id)
    {
        $dados = $testeService->getDadosForm($id);
        return view('templates/form', ['dadosForm' => $dados]);
    }


    /**
     * @param Request $request
     */
    public function save(Request $request, TesteService $testeService)
    {
        try {
            $testeService->save($request);
            return Response::HTTP_OK;

        } catch (\Exception $exception) {
            return Response::HTTP_PRECONDITION_FAILED;
        }

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
