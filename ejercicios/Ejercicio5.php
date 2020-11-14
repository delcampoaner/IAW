<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Aner Del Campo
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Aner Del Campo
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 5</h1>

  <p>Actualice la página para mostrar tres cartas y ver el valor mas alto.</p>

  <table>
    <tbody>
<?php

$azar1 = rand(0,9);
$azar2 = rand(0,9);
$azar3 = rand(0,9);

$carta = ["c1","c2","c3","c4","c5","c6","c7","c8","c9","c10"];

print "<img src = img/cartas/$carta[$azar1].svg>";
print "<img src = img/cartas/$carta[$azar2].svg>";
print "<img src = img/cartas/$carta[$azar3].svg>";

print "<br>";

if ($azar1 > $azar2 and $azar1 > $azar3) {
    echo "La carta mas alta es <img src = img/cartas/$carta[$azar1].svg>";
} else if ($azar2 > $azar1 and $azar2 > $azar3) {
    echo "La carta mas alta es <img src = img/cartas/$carta[$azar2].svg>";
} else {
    echo "La carta mas alta es <img src = img/cartas/$carta[$azar3].svg>";
}


?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>