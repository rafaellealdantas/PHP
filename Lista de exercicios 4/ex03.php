<!-- array de quatro notas e exibe a média -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="n1">digite a primeira nota: </label>
            <input type="text" name="n1" id="n1">
        </p>
        <p>
            <label for="n2">digite a segunda nota:</label>
            <input type="text" name="n2" id="n2">
        </p>
        <p>
            <label for="n3">digite a terceira nota:</label>
            <input type="text" name="n3" id="n3">
        </p>
        <p>
            <label for="n4">digite a quarta nota:</label>
            <input type="text" name="n4" id="n4">
        </p>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$n4 = $_GET['n4'];
$nota = array($n1 , $n2 ,$n3 , $n4);
$media = (array_sum($nota)) / count($nota);
foreach($nota as $i => $notaatual)
{
    echo "nota " . $i + 1 . "= " . $notaatual . "<br>";   
}
echo "a média das quatros notas é: " . $media;
?>