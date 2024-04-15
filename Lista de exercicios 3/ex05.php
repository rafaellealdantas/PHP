<!-- gerador de tabuada que o usuário deseja -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <form action="" method="get">
    <p>
        <label for="tab">qual tabuada você deseja ver: </label>
        <input type="text" id="tab" name="tab">
    </p>
    <button type="submit">enviar</button>
    </form>
</body>
</html>
<?php
$tab = $_GET['tab'];

for ($i = 0; $i <= 10 ; $i++) 
{ 
    $resultado = $tab * $i;
    echo($tab . "x" .$i . " = " .$resultado . "<br>");
}
?>