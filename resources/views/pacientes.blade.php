@extends('layout.main')

@section('title', 'Pacientes')

@section('content')
<link rel="stylesheet" href="/css/styles.css">

<div id="search-container" class="col-md-12">
  <h5>Buscar paciente</h5>
  <form action="/" method="GET">
    <input type="text" id="search" name="search" class="form-control" placeholder="Buscar...">
  </form>
</div>

<div id="pacientes-container" class="col-md-12">
  @if($search)
    <h2>Buscado por: {{$search}} </h2>
  @else
  <h2>Aucientes</h2>
  <!-- <a href="/pacientes/create" class="btn btn-dark mb-3">Adicionar novo Paciente</a> -->
  <p class="subtitle">Veja todos os pacientes cadastrados</p>
  @endif
  <div id="cards-container" class="row">
    @foreach ($pacientes as $paciente)
      <div class="card col-md-3">
        <img src="/img/paciente/{{ $paciente->image }}" alt="{{ $paciente->nome }}">
        <div class="card-body">
          <h5 class="card-nome"> {{ $paciente->nome }} </h5>
          <p class="card-raca"> Raça: {{ $paciente->raca }} </p>
          <p class="card-tutor"> Tutor: {{ $paciente->tutor }} </p>
          <div class="btn">
            <a href="/pacientes/{{ $paciente->id }}" class="btn btn-primary" id="btn-pacientes-show"> Saber mais</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</div>


@endsection

