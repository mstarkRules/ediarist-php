@extends('app')

@section('titulo','Criar Diarista')

@section('content')
  <h1>Criar Diarista</h1>
    <form action="{{ route('diarists.store') }}" method="POST" enctype="multipart/form-data">
        
        
        @include('_form')
    </form>
@endsection
