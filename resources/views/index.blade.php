@extends('app')

@section('titulo','Ediarists')

@section('content')
  <h1>Lista de Diaristas</h1>
      <table class="table">
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($diarists as $diarist)
            <tr>
              <th scope="row">{{ $diarist->id}}</th>
              <td>{{ $diarist->nome_completo }}</td>
              <td>{{ $diarist->telefone }}</td>
              <td></td>
            </tr>
          @empty
            <tr>
              <th></th>
              <td>Nenhum registro cadastrado</td>
              <td></td>
              <td></td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <a href="{{ route('diarists.create') }}" class="btn btn-success">Nova Diarista</a>
@endsection


