<!-- Faça um programa para a leitura de duas notas parciais de um aluno. O programadeve calcular a média alcançada por aluno e apresentar:
a. A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
b. A mensagem "Reprovado", se a média for menor do que sete;
c. A mensagem "Aprovado com Distinção", se a média for igual a dez -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="nota1">digite a primeira nota: </label>
            <input type="text" id="nota1" name="nota1">           
        </p>
        <p>
            <label for="nota2">digite a segunda nota: </label>
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

if($media < 7)
{
    echo "a média do aluno foi de: " .$media. "<br> o aluno está ()APROVADO (x)REPROVADO";
}else if($media >=7)
{
    echo "a média do aluno foi de: " .$media. "<br> o aluno está (x)APROVADO ()REPROVADO";
}else
{
    echo "a média do aluno foi de: " .$media. "<br> o aluno está aprovado com distinção"; 
}


?>