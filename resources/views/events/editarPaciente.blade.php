@extends('layout.main')

@section('title', 'Editar Paciente')

@section('content')

<link rel="stylesheet" href="/css/styles.css">

<div id="pacientes-container" class="col-md-12">
    <h2>Editar Paciente</h2>
    <p class="subtitle">Edite os dados do paciente selecionado</p>

    <form method="POST" action="/paciente/atualizar/{{ $paciente->id }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value= "{{ $paciente->nome }}">
        </div>

        <div class="form-group">
            <label for="raca">Raça</label>
            <input type="text" class="form-control" name="raca" id="raca" value=" {{ $paciente->raca }} ">
        </div>

        <div class="form-group">
            <label for="especie">Espécie</label>
            <input type="text" class="form-control" name="especie" id="especie" value=" {{ $paciente->especie }} ">
        </div>

        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" class="form-control" name="sexo" id="sexo" value=" {{ $paciente->sexo }} ">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao">{{ $paciente->descricao }}</textarea>
        </div>

        <div class="form-group">
            <label for="tutor">Tutor</label>
            <input type="text" class="form-control" name="tutor" id="tutor" value=" {{ $paciente->tutor }} ">
        </div>

        <div class="form-group">
            <label for="telefone">Email</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value=" {{ $paciente->email }} ">
        </div>

        <button type="submit" class="btn btn-warning" id="button-nav">Salvar</button>
    </form>

</div>

@endsection
