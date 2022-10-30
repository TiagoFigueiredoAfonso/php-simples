<?php

function conexao(){
    $host = "localhost";
    $basedados = "cadastro";
    $usuario = "root";
    $senha = "";

    $conexao = new mysqli($host, $usuario, $senha, $basedados);

    // if($conexao->connect_errno){
    //     die("falha");
    // }
    return $conexao;
}

function lista(){
    $conexao = conexao();
    $sql = "select * from clientes";
    $executar = $conexao->query($sql);
    $dadosdobanco = $executar->fetchAll();
    return $dadosdobanco;
}



