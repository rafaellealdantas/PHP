<!-- As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contaram para desenvolver o programa que calculará os reajustes. Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual:a. salários até R$ 280,00 (incluindo) : aumento de 20% b. salários entre R$ 280,00 e R$ 700,00 : aumento de 15%c. salários entre R$ 700,00 e R$ 1500,00 : aumento de 10% d. salários de R$ 1500,00 em diante : aumento de 5%e. Após o aumento ser realizado, informe na tela: f. o salário antes do reajuste; g. o percentual de aumento aplicado;h. o valor do aumento;i. o novo salário, após o aumento. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salário</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="salario">digite o salário do funcionário: </label>
            <input type="text" id="salario" name="salario">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$salario = $_GET['salario'];
echo ("salário antes do reajuste: ".$salario."<br>");
if($salario <= 280)
{
    $aumento = $salario * 0.20;
    echo ("percentual de aumento aplicado: 20%");
}
else
if($salario > 280 && $salario <= 700)
{
    $aumento = $salario * 0.15;
    echo ("percentual de aumento aplicado: 15%");
}else
if($salario > 700 && $salario <=1500)
{
    $aumento = $salario * 0.10;
    echo ("percentual de aumento aplicado: 10%");
}else
if($salario > 1500)
{
    $aumento = $salario * 0.05;
    echo ("percentual de aumento aplicado: 5%");
}
echo ("<br>o valor do aumento foi de: " . $aumento);
echo ("<br>salário após reajuste: " . $salario + $aumento);

?>