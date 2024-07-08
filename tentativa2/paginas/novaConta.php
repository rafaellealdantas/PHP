<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar conta</title>
</head>
<body>
<?php

require_once ('../funcoes/funcoes_usuarios.php');
require_once ('../config/banco.php');
require_once ('../funcoes/enviarImagem.php');

session_start();

$usuario = $_SESSION['usuario'] ?? null;

if(!is_null($usuario)){
    header('location: ./feed.php');
}else
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? NULL;
    $nome = $_POST['nome'] ?? NULL;
    $senha = $_POST['senha'] ?? NULL;

    // Salva a imagem e obtém o caminho do arquivo
    $imagem = enviarImagem();

    // Cria o novo usuário
    novoUsuario($usuario, $nome, $senha, $imagem);
}

?>
<link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
<div class="dropdown">       
            <h1>Bem vindo a minha aplicação PHP</h1>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/index.php">Inicio</a></li>   
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/paginas/login.php">Login</a></li>   
                <li><a class="dropdown-item" href="/PHP/prova_final/teste/tentativa2/paginas/feed.php">Feed</a></li>
            </ul>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="caixaDoUsuario">
    <h4>Criar Usuário</h4>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Usuário:</label>
        <input type="text" name="usuario">
        
        <label for="">Nome:</label>
        <input type="text" name="nome">

        <label for="">Senha:</label>
        <input type="text" name="senha">

        <label for="">Imagem:</label>
        <input type="file" name="fotoUsuarioNovo">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>
