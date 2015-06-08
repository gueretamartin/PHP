<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include("conection.inc");
$vNombre = $_POST['nombre'];
$vEdad = $_POST['edad'];
$vFecha = $_POST['fecha'];
$vTelefono = $_POST['telefono'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(telefono  ) FROM amigos WHERE $vTelefono=telefono";
$vResultado = mysql_query($vSql, $link) or die (mysql_error());;
$vCantUsuarios = mysql_result($vResultado, 0);
if ($vCantUsuarios != 0){
echo ("El Usuario ya Existe<br>");
echo ("<A href='menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO amigos (nombre, edad, fecha, telefono)
values ('$vNombre', '$vEdad', '$vFecha', '$vTelefono')";
mysql_query($vSql, $link) or die (mysql_error());
echo("El Usuario fue Registrado, Pronto recibirás un email, confirmandote la
actualizaciòn
a nuestra pagina<br>");
echo ("<A href='menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysql_free_result($vResultado);
}
// Cerrar la conexion
mysql_close($link);
?>
</body>
</html>