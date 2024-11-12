<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "compra de video juegos") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into iniciosesion(NombreUsuario,Contraseña) values 
                       ('$_REQUEST[NombreUsuario]','$_REQUEST[Contraseña]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "iniciosesion";
  ?>
  
</body>
</html>