<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejemplo de multiplicar con For</title>
  </head>
  <body>
  <?php
  $tablas=[
    "primera"=>5,
    "segunda"=>13,
    "tercera"=>11
  ];
  foreach ($tablas as $valor) {
    echo "<br>";
  for ($i=0; $i < 11; $i++) {
    $resultado= $valor * $i;
    echo $valor ." x " .$i ." = " .$resultado ."<br>";
  }
}
   ?>
  </body>
</html>
