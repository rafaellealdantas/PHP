<!-- Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gênero</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="genero">digite seu gênero: </label>
            <input type="text" name="genero" id="genero">
            <button type="submit">enviar</button>

        </p>
    </form>
</body>
</html>

<?php 

$genero = strtoupper($_GET['genero']);
switch ($genero)
{
    case 'M':
        echo "M - masculino";
        break;
    case 'F':
        echo "F - feminino";
        break;        
    default:
        echo $genero ." é uma opção inválida";
        break;
}


?>