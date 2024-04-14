<!--  Faça um programa para o cálculo de uma folha de pagamento, sabendo que osdescontos são do Imposto de Renda, que depende do salário bruto (conforme tabelaabaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto,mas não é descontado (é a empresa que deposita). O Salário Líquido correspondeao Salário Bruto menos os descontos. O programa deverá pedir ao usuário o valorda sua hora e a quantidade de horas trabalhadas no mês.a. Desconto do IR:b. Salário Bruto até 900 (inclusive) - isentoc. Salário Bruto até 1500 (inclusive) - desconto de 5%d. Salário Bruto até 2500 (inclusive) - desconto de 10%e. Salário Bruto acima de 2500 - desconto de 20% Imprima na tela asinformações, dispostas conforme o exemplo abaixo. No exemplo o valor dahora é 5 e a quantidade de hora é 220 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salário com descontos</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="ganhohora">valor ganho por hora:</label>
            <input type="text" id="ganhohora" name="ganhohora">
        </p>
        <p>
            <label for="horastrab">quantas horas você trabalha por mês:</label>
            <input type="text" id="horastrab" name="horastrab">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>

<?php
$ganhohora = $_GET['ganhohora'];
$horastrab = $_GET['horastrab'];

$salbrut = $ganhohora * $horastrab;

if($salbrut > 2500)
{
    $percentualdesc = $salbrut * 0.20;    
}else
if($salbrut <= 2500 && $salbrut > 1500)
{
    $percentualdesc = $salbrut * 0.10; 
}else
if($salbrut <= 1500 && $salbrut > 900)
{
    $percentualdesc = $salbrut * 0.05; 
}else
{
    $percentualdesc = "isento";
}

$inss = $salbrut * 0.10;

$fgts = $salbrut * 0.11;

$totdesc = $percentualdesc + $inss;

$salliq = $salbrut - $totdesc;

echo ("salário bruto: ". $salbrut. "<br> IR: " . $percentualdesc. "<br> INSS: " . $inss. "<br> FGTS: " . $fgts . "<br> total de descontos: " .$totdesc . "<br>salário líquido: " . $salliq);
?>