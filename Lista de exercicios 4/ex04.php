<?php
$letras = range('a' , 'j');
$count = 0;
$vogal = array('a' , 'e' , 'i' , 'o' , 'u');
foreach($letras as $letra)
{
    if(! in_array($letra , $vogal))
    {
        $count++;
    }   
}

echo $count;
?>