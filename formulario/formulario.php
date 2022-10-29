<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        #alerta {
            color: red;
        }
    </style>
</head>
<body>
    <h3>Formulário com PHP</h3>
    <p id="alerta">* Campos obrigatórios</p>
    <form action="" method="post">
        <p>
            Nome: <input type="text" name="nome"><span id="alerta"> *</span>
            <?php $nome = !empty($nome) ? "" : $temp ?>
        </p>
        <p>
            E-mail: <input type="text" name="email"><span id="alerta"> *</span>
        </p>
        <p>
            Website: <input type="url" name="site">
        </p>
        <p>
            Comentário: <textarea name="comentario" cols="30" rows="10"></textarea>
        </p>
        <p>
            Gênero: <input type="radio" name="genero" value="feminimo" checked>Feminino
            <input type="radio" name="genero" value="masculino">Masculino
            <input type="radio" name="genero" value="outros">Outro
        </p>
        <p>
            <button type="submit" name="enviar">Enviar</button>
        </p>
    </form>

  

    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $site = $_POST['site'];
        $comentario = $_POST['comentario'];
        $genero = $_POST['genero'];
        $enviar = $_POST['enviar'];
        $vazio = "Não informado";
        $temp = "Preencha o nome";

        if(isset($enviar)){
            if(empty($nome) || strlen($nome) < 3 || strlen($nome) > 30){
                echo "<p id=\"alerta\">Campo nome deve ser preenchido corretamente</p>";
                //die();
            }
            elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p id=\"alerta\">O email deve ser preenchido</p>";
                //die();
            }
            elseif(!empty($site) && !filter_var($site, FILTER_VALIDATE_URL)){
                echo "A url do site dever ser preenchida corretamente";
                //die();
            }
            elseif(!empty($genero)){
                
                if($genero != "feminino" || $genero != "masculino" || $genero != "outros"){ 
                    echo "<p id=\"alerta\">Preencha corretamente o gênero</p>";
                   // die();
                   //var_dump($genero);
                }
            }
            
        else{
            echo "Nome: " . $nome . "<br>";
            echo "E-mail: " . $email . "<br>";
            echo "WebSite: " . $site = !empty($site) ? $site . "<br>": "Não informado". "<br>";
            echo "Comentário: " . $comentario = !empty($comentario) ? $comentario . "<br>" : "Não informado" . "<br>";
            echo "Gênero: " . $genero = !empty($genero) ? $genero : "Não informado" . "<br>";
        }
            
        }
        
        
        
        
    ?>
</body>
</html>