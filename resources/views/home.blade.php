@extends('layouts.app') 
@section('content')
<div class="container">
        <form id="regForm" novalidate action="{{ url('/pessoas/store') }}" method="post">
         {{csrf_field()}}   
        <h1>Register:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
            <p>
                <input placeholder="Nome" type="text" name="nome" value="{{ isset($pessoa->nome) ? $pessoa->nome : '' }}">
            </p>
            <p>
                <input placeholder="Data de Nascimento" type="date" name="nascimento" value="{{ isset($pessoa->nascimento) ? $pessoa->nascimento : '' }}">
            </p>

            <p>
                <input placeholder="Rua" type="text" name="rua" value="{{ isset($pessoa->endereco->rua) ? $pessoa->endereco->rua : '' }}">
            </p>
            <p>
                <input placeholder="Numero" type="text" name="numero" value="{{ isset($pessoa->endereco->numero) ? $pessoa->endereco->numero : '' }}">
            </p>

        </div>
        <div class="tab">Experiencias:
           
            <input type="button" id="add_field" value="adicionar">
            <br>
            <div id="listas">
                <div>
                    <input placeholder="Descricão" type="text" name="experiencias[0][descricao]" value="{{ isset($pessoa->experiencias->descricao) ? $pessoa->experiencias->descricao : '' }}">
                    <input placeholder="Empresa" type="text" name="experiencias[0][empresa]" value="{{ isset($pessoa->experiencias->empresa) ? $pessoa->experiencias->empresa : '' }}">
                </div>
            </div>
        </div>
        
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
           
        </div>
    </form>
</div>


@endsection

