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
  <h1>Ejemplo de ejercicio sin formulario 2</h1>

  <p>Actualice la página para mostrar un codigo de color RGB al azar.</p>

  <table>
    <tbody>
<?php

    $azar1= rand(0,255);
    $azar2= rand(0,255);
    $azar3= rand(0,255);
    print " <p style='color:rgb($azar1,$azar2,$azar3)'> RGB ($azar1,$azar2,$azar3)</p> ";

?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>
