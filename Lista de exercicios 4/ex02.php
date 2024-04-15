<!-- array de 10 números exibidas na ordem inversa -->
<?php
$numreal = array(10.5 , 11.3 , 45.6 , 70.6 , 12.5 , 31.3 , 44.6 , 93.6 , 87.3 , 12.3);
echo ("os números são: ");
for($i = count($numreal) - 1 ; $i >= 0 ; $i--)
{
    echo$numreal[$i] .  " ";
}
?>