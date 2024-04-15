<!-- array de cinco números que exibe em console -->
<?php 
$numeros = array (20 , 10 , 5 , 30 , 80);
echo ("os números são: ");
for($i = 0 ; $i < count($numeros) ; $i++)
{
    echo $numeros[$i]. " ";
}
?>