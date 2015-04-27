<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM docentes_utn";
$vResultado = mysql_query($vSql, $link);
$total_registros=mysql_num_rows($vResultado);
?>
<table border=1>
<tr>
<td><b>Nombre</b></td>
<td><b>Apellido</b></td>
<td><b>Legajo</b></td>
</tr>
<?php
while ($fila = mysql_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['nombre']); ?></td>
 <td><?php echo ($fila['apellido']); ?></td>
 <td><?php echo ($fila['legajo']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
// Liberar conjunto de resultados
mysql_free_result($vResultado);
// Cerrar la conexion
mysql_close($link);
?>
 </td>
</tr>
</table>
<p>&nbsp;</p>
<p align="center"><a href="menu.html">Volver al men&uacute; del ABM</a></p>
</body>
</html> 