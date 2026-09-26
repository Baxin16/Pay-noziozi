<?php

$calificacion1 = $_POST["calificacion1"];
$calificacion2 = $_POST["calificacion2"];
$calificacion3 = $_POST["calificacion3"];

$suma = $calificacion1 + $calificacion2 + $calificacion3;

$promedio = $suma / 3;

echo "<h1>Resultado</h1>";

echo "Calificación 1: " . $calificacion1 . "<br>";
echo "Calificación 2: " . $calificacion2 . "<br>";
echo "Calificación 3: " . $calificacion3 . "<br><br>";

echo "Suma: " . $suma . "<br>";
echo "Promedio: " . $promedio;

?>
