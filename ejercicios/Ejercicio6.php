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
  <h1>Ejemplo de ejercicio sin formulario 6</h1>

  <p>Actualice la página para mostrar dos dados aleatorios y ver el valor total.</p>

  <table>
    <tbody>
<?php

$azar1 = rand(1,6);
$azar2 = rand(1,6);

print "<img src= img/dados/$azar1.svg>";
print "<img src= img/dados/$azar2.svg>";

print "<p>Valor total: ".($azar1 + $azar2)."</p>";


?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>