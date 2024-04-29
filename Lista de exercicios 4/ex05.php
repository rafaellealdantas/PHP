<?php

$num = range(1 , 20);
echo "os números digitados foram: ";
foreach($num as $numeros)
{
    echo " " . $numeros;
    if($numeros % 2 == 0)
    {
        $par[] = $numeros;        
    }
    if ($numeros % 2 != 0) 
    {
        $impar[] = $numeros;
    }

}
echo "<br>os números pares são: ";
foreach($par as $num_par)
{
    echo " ". $num_par;
}
echo "<br>e os números ímpares são: ";
foreach($impar as $num_impar)
{
    echo " ". $num_impar ;
}
?>