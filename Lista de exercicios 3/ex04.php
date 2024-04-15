<!-- recebe dois números inteiros e imprime os números no intervalo -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dois números inteiros</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="num1">digite um número: </label>
            <input type="text" id="num1" name="num1">
        </p>
        <p>
            <label for="num2">digite um número: </label>
            <input type="text" id="num2" name="num2">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
echo ("o intervalo dos dois números é: ");
for($i = $num1 ; $i <= $num2 ; $i++)
{
    echo ("// " . $i . " ");
}
echo ("<br>A soma dos dois números é: " . $num1 + $num2)
?>