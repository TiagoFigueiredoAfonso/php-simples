<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET</title>
</head>
<body>
    <h3>Formulário GET</h3>
    <form action="" method="get"> <!--dados passam pela URL-->
        Nome: <input type="text" name="nome"><br><br>
        Idade: <input type="text" name="idade"><br><br>
        Email: <input type="text" name="email"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>

    <!-- <p>Meu nome é: <?php $nome ?></p>
    <p>Minha idade: <?php $idade?> anos</p>
    <p>Email: <?php $email?></p> -->
    <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $email = $_GET['email'];

        echo "Meu nome é: " . $nome . "<br>";
        echo "Tenho: " . $idade . " anos" . "<br>";
        echo "Email: " . $email;
    
    ?>
</body>
</html>