@extends('app')

@section('titulo','Editar Diarista')

@section('content')
  <h1>Editar Diarista</h1>
    <form action="{{ route('diarists.update', $diarist) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')
            
        @include('_form')
        


    </form>
@endsection
