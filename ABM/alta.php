<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
 include("conexion.inc");
//Captura datos desde el Form anterior
$vNombre = $_POST['nombre'];
$vApellido = $_POST['apellido'];
$vLegajo = $_POST['legajo'];
$vPassword= $_POST['pass'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(legajo) FROM docentes_utn WHERE legajo='$vLegajo'";
$vResultado = mysql_query($vSql, $link) or die (mysql_error());;
$vCantUsuarios = mysql_result($vResultado, 0);
if ($vCantUsuarios != 0){
 echo ("El Usuario ya Existe<br>");
 echo ("<A href='menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO docentes_utn (nombre, apellido, legajo, password)
values ('$vNombre', '$vApellido', '$vLegajo', '$vPassword')";
 mysql_query($vSql, $link) or die (mysql_error());
 echo("El Usuario fue Registrado, Pronto recibirás un email, confirmandote la actualizaciòn
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