<h1>Lista de Clientes</h1>
<?php
    $sql = "SELECT * FROM cliente";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-striped table-bordered table-hover overflow-x-auto '>";
        print "<tr>";
            print "<th>Logo</th>";
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
            $data_fundacao_empresa = $row->data_fundacao_empresa;
            $dataFormatadaEmpresa = date('d/m/y', strtotime($data_fundacao_empresa));
            
            $data_aniversario = $row->data_aniversario_contato;
            $dataFormatadaAniversario = date('d/m/y', strtotime($data_aniversario));
            if($_SESSION['id'] === $row->id_contador && password_verify($_SESSION['senha'], $row->senha)){
                print "<tr>";
                print "<td><img src='$row->Logo.' class='img-fluid' style='width: 50px'></td>";
                print "<td>".$row->nome_empresa."</td>";
                print "<td>".$dataFormatadaEmpresa."</td>";
                print "<td>".$row->Telefone_empresa."</td>";
                print "<td>".$row->Nome_contato."</td>";
                print "<td>".$dataFormatadaAniversario."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->Telefone_Contador."</td>";
                print "<td><button onclick=\"location.href='?page_cliente=editar_cliente&id=".$row->id."'\" class='btn btn-success'>
                                Editar
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page_cliente=salvar_cliente&acao=excluir_cliente&id=".$row->id."';}else{false;}\" class='btn btn-danger'>
                                Excluir
                            </button>
                        </td>";
                print "<tr>";
            }
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou clientes</p>;";
    }
?>