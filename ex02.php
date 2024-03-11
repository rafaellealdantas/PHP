<!-- Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure por M_PI -->
<?php 
// adicionando dados as variáveis 
$raio = 13;

// perímetro do círculo
$perimetro = 2*M_PI* $raio;

// área do cículo
$area = $raio*$raio*M_PI;

// exibindo área e perímetro
echo "o perímetro do círculo é: " .$perimetro. " e a área é de: " .$area; 


?>