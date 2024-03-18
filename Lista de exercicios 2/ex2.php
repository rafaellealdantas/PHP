<!-- Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <p>
        <label for="num">digite um numero positivo ou negativo:</label>
        <input type="text" name="num" id="num">
        <button type="submit">enviar</button>
        </p>  
    </form>  
</body>
</html>

<?php 
$num = $_GET['num'];

if($num < 0)
{
    echo "o número " . $num . " é negativo";
}else 
{
    echo "o número " . $num . " é positivo";
}

?>