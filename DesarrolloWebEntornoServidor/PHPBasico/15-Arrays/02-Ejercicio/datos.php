<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];
$numero4 = $_GET['numero4'];

$maximo = max($numero1, $numero2, $numero3, $numero4);
$minimo = min($numero1, $numero2, $numero3, $numero4);

echo "Números introducidos: " . $numero1 . " , " . $numero2 . " , " . $numero3 . " , " . $numero4;
echo "<br>";

echo "<p style='font-size: 20px;'>Máximo: $maximo</p>";
echo "<p style='font-size: 20px; color: blue;'>Mínimo: $minimo</p>";
?>
