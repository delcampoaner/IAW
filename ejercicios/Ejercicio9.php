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
  <h1>Ejemplo de ejercicio sin formulario 9</h1>

  <p>Actualice la página para mostrar entre 1 y 10 dados y ver el valor total de puntos.</p>

  <table>
    <tbody>
<?php

$azar1 = rand(1,6);
$azar2 = rand(1,6);
$azar3 = rand(1,6);
$azar4 = rand(1,6);
$azar5 = rand(1,6);
$azar6 = rand(1,6);
$azar7 = rand(1,6);
$azar8 = rand(1,6);
$azar9 = rand(1,6);
$azar10 = rand(1,6);

$suma = $azar1+$azar2+$azar3+$azar4+$azar5+$azar6+$azar7+$azar8+$azar9+$azar10;

print "
<img src='img/dados/$azar1.svg'>
<img src='img/dados/$azar2.svg'>
<img src='img/dados/$azar3.svg'>
<img src='img/dados/$azar4.svg'>
<img src='img/dados/$azar5.svg'>
<br>
<img src='img/dados/$azar6.svg'>
<img src='img/dados/$azar7.svg'>
<img src='img/dados/$azar8.svg'>
<img src='img/dados/$azar9.svg'>
<img src='img/dados/$azar10.svg'>
<br>
Valor total de puntos: $suma
";

    



?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>
