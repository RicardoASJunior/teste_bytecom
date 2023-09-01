<h1>Cadastro</h1>
<form action="?page=salvar" method="POST" >
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome da Empresa</label>
        <input type="text" name="nome_empresa" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de fundação da empresa</label>
        <input type="date" name="data_fundacao_empresa" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone da Empresa</label>
        <input type="tel" id="Telefone_empresa" class="form-control" name="phone" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
    </div>
    <div class="mb-3">
        <label for="">Nome do contador</label>
        <input type="text" name="Nome_contardor" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento do contador</label>
        <input type="date" name="data_aniversario_contador" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">CRC</label>
        <input type="text" name="CRC" class="form-control" pattern="1[A-Z]{2}[0-9]{6}/O-[0-9]" placeholder="1UFXXXXXX/O-X">
    </div>
    <div class="mb-3">
        <label for="">E-mail do contador</label>
        <input type="email" name="e-mail" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone do contador</label>
        <input type="tel" id="Telefone_Contador" class="form-control" name="phone" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="confirmacao_senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Confirme sua senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </div>
</form>