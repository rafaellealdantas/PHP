<!-- Faça um Programa que peça dois números e imprima o maior deles. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>armazenamento de dois números</title>
</head>
<body>
 
<form action="" method="get">
    <p>
        <label for="numero">digite um numero: </label>
        <input type="text" name="numero" id="numero">
    </p>
    <p>
        <label for="num2">digite outro número: </label>
        <input type="text" name="num2" id="num2">
    </p>
    <button type="submit">enviar</button>

</form>

</body>

</html>


<?php 

$num1 = $_GET ['numero'];
$num2 = $_GET['num2'];

if($num1 > $num2)
{
    $aux = $num2;
    $num2 = $num1;
    $num1 = $aux;

}
$soma = $num1 + $num2;
echo "O Maior número digitado foi: " . $num2 ;
echo "<br> O menor número digitado foi: " . $num1;
echo"<br> A soma dos dois da: " . $soma; 


?>