@extends('app')

@section('titulo','Editar Diarista')

@section('content')
  <h1>Editar Diarista</h1>
    <form action="{{ route('diarists.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            
        @include('_form')
        


    </form>
@endsection
