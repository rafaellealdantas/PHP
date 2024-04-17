<!-- Faça um Programa que peça os 3 lados de um triângulo. O programa deveráinformar se os valores podem ser um triângulo. Indique, caso os lados formem umtriângulo, se o mesmo é: equilátero, isósceles ou escaleno. Dicas:a. Três lados formam um triângulo quando a soma de quaisquer dois lados formaior que o terceiro;b. Triângulo Equilátero: três lados iguais;c. Triângulo Isósceles: quaisquer dois lados iguais;d. Triângulo Escaleno: três lados diferentes; -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triângulo</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="lado1">informe o primeiro lado do trinânglo: </label>
            <input type="text" name="lado1" id="lado1">
        </p>
        <p>
            <label for="lado2">informe o segundo lado do trinânglo: </label>
            <input type="text" name="lado2" id="lado2">
        </p>
        <p>
            <label for="lado3">informe o terceiro lado do triângulo</label>
            <input type="text" name="lado3" id="lado3">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$lado1 = $_GET['lado1'];
$lado2 = $_GET['lado2'];
$lado3 = $_GET['lado3'];
$somalados = $lado1 + $lado2 + $lado3;
if($lado1 > ($soma1 + $soma2) )
if($lado1 == $lado2 && $lado2 == $lado3)
{
    echo "esse é um triângulo equilátero";
}else
if($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1)
{
    echo "esse é um triângulo isósceles";
}else
    echo "esse é um triângulo escaleno";
?>