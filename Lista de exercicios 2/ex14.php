<!-- Faça um programa que lê as duas notas parciais obtidas por um aluno numadisciplina ao longo de um semestre, e calcule a sua média. A atribuição de conceitosobedece à tabela abaixo:a. O algoritmo deve mostrar na tela as notas, a média, o conceitocorrespondente e a mensagem “APROVADO” se o conceito for A, B ou C ou“REPROVADO” se o conceito for D ou E -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notas dos alunos</title>
</head>
<body>
    <form action="" method="get">
    <p>
        <label for="nota1">digite a primeira nota do aluno: </label>
        <input type="text" id="nota1" name="nota1">
    </p>    
    <p>    
        <label for="nota2">digite a segunda nota do aluno: </label>
        <input type="text" id="nota2" name="nota2">
    </p>
    <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) / 2;
if($media <= 4)
{
    $conceito = "E = APROVADO() // REPROVADO(x)";
}else
if($media >= 4 && $media <= 6)
{
    $conceito = "D = APROVADO() // REPROVADO(x)";
}else
if($media > 6 && $media <= 7.5)
{
    $conceito = "C = APROVADO(x) // REPROVADO()";
}else
if($media > 7.5 && $media <= 9)
{
    $conceito = "B = APROVADO(x) // REPROVADO()";
}else
if($media > 9 && $media <= 10)
{
    $conceito = "A = APROVADO(x) // REPROVADO()";
}

echo("nota 1: " . $nota1 . "<br> nota 2: " . $nota2 . "<br> média: " . $media. "<br> conceito: " . $conceito);
?>