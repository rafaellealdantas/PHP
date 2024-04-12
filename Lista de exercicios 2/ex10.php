<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pergunta em que estuda. Pede para digitar M-matutino V-Vespertino N- Noturno. Imprima a mensagem "Bom Dia!", "BoaTarde!" "Boa Noite!" "Valor Inválido!".</title>
</head>
<body>
    <form action="" method="get">
        <p>
            <label for="turno">digite o turno que você estuda (M-matutino V-Vespertino N- Noturno): </label>
            <input type="text" id="turno" name="turno">
        </p>
        <button type="submit">enviar</button>
        
    </form>
</body>
</html>
<?php
$turno = $_GET['turno'];
$turno = strtoupper($turno);

switch ($turno) {
    case 'M':
        echo ("Bom dia!!!");
        break;
    case 'V':
        echo ("Boa tarde!!!");
        break;
    case 'N':
        echo ("Boa noite!!!");
        break;
    default:
        echo ("opção inválida");
        break;
}

?>