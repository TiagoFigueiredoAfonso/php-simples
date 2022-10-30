<?php

    include('conexao.php');
    
   
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="lista.php">Lista de Clientes</a>
    <h3>Cadastro de Clientes</h3>
    <form action="" method="post">
        
        <label for="nome">Nome</label>
        <input type="text" name="nome"><br><br>

        <label for="email">E-email</label>        
        <input type="text" name="email"><br><br>     
        
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone"><br><br>

        <button type="submit">Enviar</button>
        <br>
    </form>


</body>
</html>