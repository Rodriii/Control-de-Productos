<html>
<head>
<title>Alta de un producto</title>
</head>
<body>
<h1>Alta de un producto</h1>
<hr>
<br>
<?php
$conexion=mysql_connect("localhost","root","") 
  or die("Problemas en la conexion");
mysql_select_db("base1",$conexion) or
  die("Problemas en la seleccion de la base de datos");
mysql_query("insert into productos(nombre,precio) values 
   ('$_REQUEST[nombre]','$_REQUEST[precio]')", 
   $conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);
echo "El producto fue agregado satisfactoriamente";
?>
</body>
</html>
