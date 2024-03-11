<!--  Faça um script que peça 2 números inteiros e um número real. Calcule emostre:a. O produto do dobro do primeiro com metade do segundo.b. A soma do triplo do primeiro com o terceiro.c. O terceiro elevado ao cubo -->

<?php 
// adicionando dados as variáveis 
$numint1 = 100;
$numint2 = 100;
$numreal = 50.3; 

// O produto do dobro do primeiro com metade do segundo
$dobro1 = $numint1 * 2;
$metade2 = $numint2 / 2;
$prod1 = $dobro1 * $metade2;

// A soma do triplo do primeiro com o terceiro
$triplo1 = $numint1 * 3;
$triplo3 = $numreal * 3;
$soma = $triplo1 + $triplo3;

//  O terceiro elevado ao cubo
$cubo = pow($numreal , 3);

// mostrando os resultados
echo "O produto do dobro do primeiro com metade do segundo é : " . $prod1; 
echo "<br>A soma do triplo do primeiro com o terceiro é : " . $soma; 
echo "<br>O terceiro elevado ao cubo é: " . $cubo; 

?>