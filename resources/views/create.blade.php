<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Criar Diarista</title>
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
    <h1>Criar Diarista</h1>
    <form>
        <div class="mb-3">
            <label for="nome_completo" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome_completo" name="nome_completo" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="14">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required maxlength="15">
        </div>
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" required maxlength="255">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" required maxlength="20" >
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" maxlength="50">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" required maxlength="2">
        </div>
        <div class="mb-3">
            <label for="codigo_ibge" class="form-label">Código IBGE</label>
            <input type="text" class="form-control" name="codigo_ibge" id="codigo_ibge" required>
        </div>
        <div class="mb-3">
            <label for="foto_usuario" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto_usuario" id="foto_usuario">
        </div>
        <button  class="btn btn-primary">Salvar</button>
    </form>

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