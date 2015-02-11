<?php namespace App\Http\Controllers;


use App\Http\Middleware\Caravana;
use App\Http\Requests\CaravanaRequest;

class CaravanaController extends Controller
{
    protected $caravana;

    public function __construct(Caravana $caravana)
    {
        $this->caravana = $caravana;
    }

    public function getForm()
    {
        return view('inscricao');
    }

    public function postForm(CaravanaRequest $request)
    {

        $salvar = $this->caravana->save($request->all());

        if(!$salvar){
            \Session::put('erro', 'Não pode salvar o registro');
            return \Redirect::back()->withInput();
        }

        \Session::put('sucesso', 'Inscrição realizada com sucesso');
        return \Redirect::to('/inscricao/form');
    }
}