<?php
function enviarImagem($pasta = "profile"){
    $target_dir = "../images/$pasta/";
    $target_file = $target_dir . basename($_FILES["fotoUsuarioNovo"]["name"]);
    move_uploaded_file($_FILES["fotoUsuarioNovo"]["tmp_name"], $target_file);
    return $target_file;  // Retorna o caminho do arquivo salvo
}
?>
