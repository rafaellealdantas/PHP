<?php

class usuario{

static function salvarUsuario($objusuario){
    $_SESSION['codusuario'] = $objusuario -> id;
    $_SESSION['usuario'] = $objusuario -> usuario;
    $_SESSION['nome'] = $objusuario -> nome;
    $_SESSION['senha'] = $objusuario -> senha;
    $_SESSION['imagem'] = $objusuario -> imagem;

    }

}

?>