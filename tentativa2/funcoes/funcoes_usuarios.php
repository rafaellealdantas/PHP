<?php
require_once('../config/banco.php');
require_once('../classe/usuario.php');

function novoUsuario($usuario, $nome, $senha, $imagem = null){
    global $banco;
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $q = "INSERT INTO usuarios(usuario, nome, senha, imagem) VALUES ('$usuario', '$nome', '$senhaHash', '$imagem')";
    $banco->query($q);
}

function login($usuario, $senha){
    global $banco;
    $q = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $busca = $banco->query($q);

    if($busca -> num_rows > 0){
        $objusuario = $busca -> fetch_object(); 
        if(password_verify($senha, $objusuario->senha)){
            usuario::salvarUsuario($objusuario);
            return true;
        }else{
            echo ("senha incorreta");
            return false;
        }              
    }else{
        echo ("usuário inexistente");
    }
}
?>
