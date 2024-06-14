<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sala de Cinema</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 0 auto;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    td {
        background-color: #b2c8d6;
        cursor: pointer;
    }
    td.ocupado {
        background-color: #ff9999;
        cursor: not-allowed;
    }
    h2 {
        text-align: center;
    }
</style>
</head>
<body>

<?php
$assentos = array(
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 0, 1, 1),
    array(0, 1, 1, 1, 0),
    array(0, 0, 1, 0, 0),
);

function mostrarSala($assentos) {
    echo "<h2>Sala de Cinema</h2>";
    echo "<table>";
    foreach ($assentos as $fileira => $assentos_fileira) {
        echo "<tr>";
        foreach ($assentos_fileira as $coluna => $assento) {
            if ($assento == 1) {
                echo "<td>Assento " . ($coluna + 1) . "</td>";
            } else {
                echo "<td class='ocupado'>Ocupado</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

mostrarSala($assentos);
?>

</body>
</html>
