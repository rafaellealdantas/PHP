<!--  Faça um Programa que leia um número e exiba o dia correspondente da semana.(1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dia da semana</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="dia">DIGITE O NÚMERO DE 1 A 7: </label>
            <input type="text" id="dia" name="dia">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$dia = $_GET['dia'];

switch ($dia) 
{
    case '1':
        echo ("Domingo");
        break;
    case '2':
        echo("Segunda");
        break;
    case '3':
        echo("Terça");
        break; 
    case '4':
        echo("Quarta");
        break;   
    case '5':
        echo ("Quinta");
        break;
    case '6':
        echo("Sexta");
        break;
    case '7':
        echo("Sábado");
        break; 
    default:
        echo("número inválido");
        break;
}
?>