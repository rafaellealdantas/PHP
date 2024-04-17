<!-- Faça um programa, com uma função que necessite de três argumentos, eque forneça a soma desses três argumentos -->
<?php
function soma($num1 , $num2 , $num3)
{
    $soma = $num1 + $num2 + $num3;
    return $soma;
}
$num1 = 5;
$num2 = 10;
$num3 = 100;

$resultado = soma($num1 , $num2 , $num3);

echo "a soma dos três números é: " . $resultado;
?>