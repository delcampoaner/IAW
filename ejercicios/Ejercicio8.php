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
  <h1>Ejemplo de ejercicio sin formulario 8</h1>

  <p>Actualice la página para mostrar entre 1 y 10 circulos de colores en una fila .</p>

  <table>
    <tbody>
<?php

$azar1 = rand(0,255);
$azar2 = rand(0,255);
$azar3 = rand(0,255);

$circulos = rand(1,10);

for ($i = 0; $i <= $circulos; $i++) {
    print "<p>
    <svg height='150' width='150'>
    <circle cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($azar1,$azar2,$azar3)'/>
    </svg>
    </p>";
}


?>
    </tbody>
  </table>

  <footer>
    <p>Aner Del Campo</p>
  </footer>
</body>
</html>
