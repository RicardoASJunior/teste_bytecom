<h1>Editar Cliente</h1>
<?php
    $sql = "SELECT * FROM cliente WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page_cliente=salvar_cliente" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="acao"  value="editar_cliente">
    <input type="hidden" name="id"  value="<?php print $row->id ?>">
    <div class="mb-3">
        <label for="">Nome da Empresa</label>
        <input type="text" name="nome_empresa" value="<?php print $row->nome_empresa; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de fundação da empresa</label>
        <input type="date" name="data_fundacao_empresa" value="<?php print $row->data_fundacao_empresa; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone da Empresa</label>
        <input type="tel" id="phone" class="form-control" name="Telefone_empresa" value="<?php print $row->Telefone_empresa; ?>" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx">
    </div>
    <div class="mb-3">
        <label for="">Nome do Contato</label>
        <input type="text" name="Nome_contato" value="<?php print $row->Nome_contato; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de nascimento do contato</label>
        <input type="date" name="data_aniversario_contato" value="<?php print $row->data_aniversario_contato; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail do contato</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Telefone do contato</label>
        <input type="tel" id="phone" class="form-control"  name="Telefone_Contador" value="<?php print $row->Telefone_Contador; ?>" pattern="\([0-9]{2}\)[0-9]{4}(-)?[0-9]{4}" placeholder="(xx)xxxx-xxxx" required />
    </div>
    <div class="mb-3">
        <label for="">Logo da Empresa</label>
        <input type="file" class="form-control" name="Logo" value="<?php print $row->Logo; ?> placeholder=".png / .jpg " >
        </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
    </div>
</form>