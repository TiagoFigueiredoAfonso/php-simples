<h2>Cadastro de Usuário</h2>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data" class="form-control">
    </div>
    <div class="div-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>