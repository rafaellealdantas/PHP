<?php
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "veloster";

echo $_SESSION['cor']. "<br>" . $_SESSION['carro'] . "<br>" . session_id();
?>