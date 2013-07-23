<html>
<head>
<title>Control de productos - Pagina Principal</title>
</head>
<body>
<h1>Control de Productos</h1>
<hr>
<br>
<form action="registro.php" method="post">
Nombre del producto:
<input type="text" name="nombre"><br>
Precio:
<input type="text" name="precio"><br>
<br>
<input type="submit" value="Registrar">
</form>
<br>
<hr>
<h1>Consulta de un producto</h1>
<hr>
<br>
<form action="consulta.php" method="post">
Ingrese el nombre del producto a consultar:
<input type="text" name="nombre"><br>
<br>
<input type="submit" value="Consultar">
</form>
<br>
<hr>
<h1>Todos los productos</h1>
<hr>
<br>
<?php
$conexion=mysql_connect("localhost","root","") 
  or  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) 
  or  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select nombre,precio
                       from productos",$conexion) or
  die("Problemas en el select:".mysql_error());

while ($reg=mysql_fetch_array($registros))
{
  echo "<b><u>Producto:</u></b>".$reg['nombre']."<br>";
  echo "<b><u>Precio:</u></b>".$reg['precio']."<br>";
  echo "<br>";
  echo "<hr>";
}
mysql_close($conexion);
?>
</body>
</html>
