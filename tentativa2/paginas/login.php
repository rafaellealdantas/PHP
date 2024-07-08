
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
<div class="dropdown">       
            <h1>Bem vindo a minha aplicação PHP</h1>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/paginas/novaConta.php">novo usuario</a></li>
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/paginas/feed.php">Feed</a></li>
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/index.php">Inicio</a></li>   
            </ul>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="caixaCentral">
        <h4>fazer login</h4>        
        <form action="" method="post">
            <label for="">usuário:</label>
            <input type="text" name="usuario">
            
            <label for="">Senha:</label>
            <input type="text" name="senha">

            <button type="submit">enviar</button>
        </form>

<?php
    require_once('../config/banco.php');
    require_once('../funcoes/funcoes_usuarios.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (!is_null($usuario) && !is_null($senha)) {
        if (login($usuario, $senha)){
            header('location: feed.php');
        }else{
            echo("erro");
        }
    }


?>
    </div>
</body>
</html>