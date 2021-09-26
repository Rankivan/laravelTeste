<?php

namespace App\Http\Controllers;




use App\Http\Service\TesteService;
use Illuminate\Http\Request;


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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function form()
    {

        return view('templates/form');
    }


    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        dd($request);

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
