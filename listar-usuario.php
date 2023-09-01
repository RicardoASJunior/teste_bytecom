<h1>Lista de Clienetes</h1>
<?php
    $sql = "SELECT * FROM cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-striped table-bordered table-hover overflow-x-auto '>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Empresa</th>";
            print "<th>Fundação da Empresa</th>";
            print "<th>Telefone Empresa</th>";
            print "<th>Nome Contato</th>";
            print "<th>Nascimento Contato</th>";
            print "<th>E-mail</th>";
            print "<th>Telefone do Contato</th>";
            print "<th>Funções</th>";
        print "<tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome_empresa."</td>";
            print "<td>".$row->data_fundacao_empresa."</td>";
            print "<td>".$row->Telefone_empresa."</td>";
            print "<td>".$row->Nome_contato."</td>";
            print "<td>".$row->data_aniversario_contato."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->Telefone_Contador."</td>";
            print "<td><button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>
                            Editar
                        </button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>
                            Excluir
                        </button>
                    </td>";
            print "<tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou clientes</p>;";
    }
?>