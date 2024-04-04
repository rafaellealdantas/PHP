<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um Programa que leia três números e mostre o maior e o menor deles.</title>
</head>
<body>
   <form action="" method="get">
    <p>
        <label for="num1">digite o primeiro número: </label>
        <input type="text" id="num1" name="num1">
    </p>
    <p>
        <label for="num2">digite o sugundo número: </label>
        <input type="text" id="num2" name="num2">
    </p>
    <p>
        <label for="num2">digite o segundo número: </label>
        <input type="text" id="num3" name="num3">
    </p>
    <button type="submit">enviar</button>
   </form>
</body>
</html>
 
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$maior = $num1;
$menor = $num1;

if($num2 > $maior)
{
    $maior = $num2;
}else if($num2 < $menor)
{
    $menor = $num2;
}if($num3 > $maior)
{
    $maior = $num3;
}else if($num3 < $menor)
{
    $menor = $num3;
}
echo "o maior número digitado foi o: " .$maior. " e o menor foi: " .$menor;
?>