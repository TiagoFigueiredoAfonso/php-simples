<h3>Listar Usuários</h3>
<?php

    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql); //executa query igual insert
    $qtd = $res->num_rows; //contagem de linhas no banco

    if($qtd > 0){
        print "<table class=\"table table-hover\">";
        print "<tr>";
        print "<th> id </th>";
        print "<th>Nome</th>";
        print "<th> Email</th>";
        print "<th> Data Nascimento</th>";
        print "<th> Edição</th>";
        while($row = $res->fetch_object()){ //busca objeto banco
            print "<tr>";
            print "<td>". $row->id . "</td>";
            print "<td>". $row->nome . "</td>";
            print "<td>". $row->email . "</td>";
            print "<td>". $row->data_nasc . "</td>";
            print "<td>
                    <a href=\"?page=editar&id=" . $row->id. "\"class='btn btn-success'>Editar</a>
                    <a href=\"?page=salvar&acao=excluir&id=" . $row->id. "\"class='btn btn-danger'>Excluir</a>
                    
                  </td>";
            
            print "</tr>";
        }
        print "</table>";
    }else{
        echo "Não há nenhum usuário cadastrado";
    }

?>