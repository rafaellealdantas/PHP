<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa que lê três números e mostre o maior deles.</title>
</head>
<body>
    <form action="" method="get">
    <p>
        <label for="num1">digite um número: </label>
        <input type="text" id="num1" name="num1">        
    </p>
    <p>
        <label for="num2"> digite outro número: </label>
        <input type="text" id="num2" name="num2">
    </p>
    <p>
        <label for="num3">digite o terceiro número: </label>
        <input type="text" id="num3" name="num3">
    </p>
    <p>
        <button type="submit">enviar</button>
    </p>
    </form>
</body>
</html>

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$maior = $num1;

if($num2 > $maior)
{
    $maior = $num2;
}else if($num3 > $maior)
{
    $maior = $num3;
}
echo "o maior número é o :" .$maior;
?>