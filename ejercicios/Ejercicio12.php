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
  <h1>Ejemplo de ejercicio sin formulario 12</h1>

  <p>Actualice la página para mostrar un animal al azar.</p>

  <table>
    <tbody>
<?php

$animales = ["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon","leopardo","medusa","mono","oso","oso-blanco","pajaro","pinguino","rinoceronte","serpiente","tigre","tortuga","tortuga-marina"];

$azar = rand(0, count($animales)-1);

print "<img src=\"img/animales/$animales[$azar].svg\">";

?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>
