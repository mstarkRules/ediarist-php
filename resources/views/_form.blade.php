        @csrf

        <div class="mb-3">
            <label for="nome_completo" class="form-label">Nome Completo</label>
            <input value="{{ @$diarist->nome_completo }}" type="text" class="form-control" id="nome_completo" name="nome_completo" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input value="{{ @$diarist->cpf }}" type="text" class="form-control" id="cpf" name="cpf" required maxlength="14">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="{{ @$diarist->email }}" type="email" class="form-control" id="email" name="email" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input value="{{ @$diarist->telefone }}" type="text" class="form-control" id="telefone" name="telefone" required maxlength="15">
        </div>
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input value="{{ @$diarist->logradouro }}" type="text" class="form-control" id="logradouro" name="logradouro" required maxlength="255">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input value="{{ @$diarist->numero }}" type="text" class="form-control" id="numero" name="numero" required maxlength="20" >
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input value="{{ @$diarist->complemento }}" type="text" class="form-control" id="complemento" name="complemento" maxlength="50">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input value="{{ @$diarist->cep }}" type="text" class="form-control" id="cep" name="cep" required maxlength="20">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input value="{{ @$diarist->bairro }}" type="text" class="form-control" id="bairro" name="bairro" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input value="{{ @$diarist->cidade }}" type="text" class="form-control" name="cidade" id="cidade" required maxlength="50">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input value="{{ @$diarist->estado }}" type="text" class="form-control" name="estado" id="estado" required maxlength="2">
        </div>
        <div class="mb-3">
            <label for="codigo_ibge" class="form-label">Código IBGE</label>
            <input value="{{ @$diarist->codigo_ibge }}" type="text" class="form-control" name="codigo_ibge" id="codigo_ibge" required>
        </div>
        <div class="mb-3">
            <label for="foto_usuario" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto_usuario" id="foto_usuario">
        </div>
        <button  class="btn btn-primary">Salvar</button>