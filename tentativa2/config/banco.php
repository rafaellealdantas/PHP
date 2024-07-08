<?php
$banco = new mysqli("localhost" , "root" , "" , "bancoteste");

if($banco->errno){
    echo "<p>Erro: " . $banco->errno . "-->" . $banco->connect_error . "</p>";
    die();
}

?>