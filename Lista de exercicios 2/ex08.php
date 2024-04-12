<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="val1">digite o valor do primeiro produto: </label>
            <input type="text" id="val1" name="val1">
        </p>
        <p>
            <label for="val2">digite o valor do primeiro produto: </label>
            <input type="text" id="val2" name="val2">
        </p>
        <p>
            <label for="val3">digite o valor do primeiro produto: </label>
            <input type="text" id="val3" name="val3">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php

$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$val3 = $_GET['val3'];
$menor = $val1;

if ($val2 < $menor ) 
{
    $menor = $val2;
}else 
if($val3 < $menor)
{
    $menor = $val3;
}
echo ("o menor preço dentre os produtos é: " . $menor);

?>