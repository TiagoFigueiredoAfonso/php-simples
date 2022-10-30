<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
        <a class="nav-link" href="?page=listar">Listar Usuário</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <!--Switch/roteador para encaminhamento de pagina-->
    <?php
        include('config.php');
        switch(@$_REQUEST["page"]){
            case "novo":
                include("novo-usuario.php");
                break;
            case "listar":
                include("listar-usuario.php");
                break;
            case "salvar":
                include("salvar-usuario.php");
                break;
            case "editar":
                include("editar-usuario.php");
                break;
            default:
                print "<h1>Bem vindo!</h1>";                
        }
    ?>
</div>
<!-- onclick="if(confirm('tem certeza que deseja excluir')){location.href='?page=salvar&acao=excluir$id=id';}else{false;}"-->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>