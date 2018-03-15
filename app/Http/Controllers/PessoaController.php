<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Endereco;
use App\Pessoa;
use App\Experiencia;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = $request->all();
        $experiencias = [];
        //dd($valores);
        $endereco = Endereco::create($valores);
        $valores['endereco_id'] = $endereco->id;
        
        $pessoa = Pessoa::create($valores, 'endereco_id');
        $valores['pessoa_id'] = $pessoa->id;
              
        foreach($valores['experiencias'] as $i => $experiencia){
            $experiencias[$i] = new Experiencia($experiencia);                      
        }
        $pessoa->experiencias()->saveMany($experiencias);

        // $inscrito->addinscrito

        //dd($pessoa->experiencias());
        return ('finalle com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        return view('home2',compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
