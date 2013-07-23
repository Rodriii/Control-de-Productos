<html>
<head>
<title>Busqueda de Productos</title>
</head>
<body>
<h1>Busqueda de un Precio</h1>
<hr>
<br>
<?php
$conexion=mysql_connect("localhost","root","") or 
  die("Problemas en la conexion");

mysql_select_db("base1",$conexion) or
  die("Problemas en la selección de la base de datos");

$registros=mysql_query("select precio
                       from productos where nombre='$_REQUEST[nombre]'",$conexion) or
  die("Problemas en el select:".mysql_error());

if ($reg=mysql_fetch_array($registros))
{
  echo "<b><u>Precio:</u></b>".$reg['precio']."<br>";
}
else
{
  echo "No existe ese producto";
}
mysql_close($conexion);
?>
</body>
</html> 
