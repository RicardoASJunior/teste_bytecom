<h1>Novo Cliente</h1>
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
        <input type="tel" id="phone" class="form-control" name="Telefone_empresa" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx">
    </div>
    <div class="mb-3">
        <label for="">Nome do Contato</label>
        <input type="text" name="Nome_contato" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento do contato</label>
        <input type="date" name="data_aniversario_contato" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail do contato</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone do contato</label>
        <input type="tel" id="phone" class="form-control" name="Telefone_Contador" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </div>
</form>