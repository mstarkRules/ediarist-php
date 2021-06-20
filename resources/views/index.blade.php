<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ediarists</title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-darak bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('diarists.index') }}">Ediarists</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('diarists.index') }}">
              Lista de Diaristas</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
</header> 
  <div class="container">
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
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>