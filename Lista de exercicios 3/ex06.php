<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatorial</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="fatorial">digite um número para ver o fatorial: </label>
            <input type="text" id="fatorial" name="fatorial">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$fatorial = $_GET['fatorial'];
$resultado = 1;
for($i = $fatorial ; $i > 1 ;  $i--)
{
    $resultado *= $i ;    
}
echo($resultado);
?>