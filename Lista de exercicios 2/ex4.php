<!-- Faça um Programa que verifique se uma letra digitada é vogal ou consoante -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vogal ou consoante</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="letra">digite uma letra:</label>
            <input type="text" id="letra" name="letra">            
        </p>
        <button type="submit">enviar</button>
    </form> 
       
</body>
</html>

<?php 
$letra = strtoupper($_GET['letra']);
switch($letra)
{
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "a letra " . $letra . " é uma vogal";
        break;
        default:
        echo "a letra " .$letra. " não é uma vogal";
        break;
}


?>