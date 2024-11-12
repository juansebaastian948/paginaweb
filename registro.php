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

  mysqli_query($conexion, "insert into registro(nombre,apellidos,email,telefono,juego) values 
                       ('$_REQUEST[nombre]','$_REQUEST[apellidos]','$_REQUEST[email]',$_REQUEST[telefono],$_REQUEST[juego])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "juego comprado";
  ?>
  
</body>
</html>