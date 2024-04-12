<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lê três números e mostra em ordem decrescente.</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="num1">digite o primeiro número: </label>
            <input type="text" id="num1" name="num1">
        </p>
        <p>
            <label for="num2">digite o segundo número: </label>
            <input type="text" id="num2" name="num2">
        </p>
        <p>
            <label for="num3">digite o terceiro número: </label>
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
$aux;

if($num1 < $num2)
{
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}
if($num2 < $num3)
{
    $aux = $num2;
    $num2 = $num3;
    $num3 = $aux;
}
if($num1 < $num2)
{
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}
echo ($num1 . $num2 . $num3 );

?>