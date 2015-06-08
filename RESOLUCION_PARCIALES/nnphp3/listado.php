<html>
<head>
<title> Listados completo </title>
</head>
<body>
<?php
include("conection.inc");
$Cant_por_Pag = 4;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $Cant_por_Pag;
}// total de páginas
$vSql = "SELECT * FROM amigos";
$vResultado = mysql_query($vSql, $link);
$total_registros=mysql_num_rows($vResultado);
$total_paginas = ceil($total_registros/ $Cant_por_Pag);
$vSql = "SELECT * FROM amigos" . " limit " . $inicio . "," . $Cant_por_Pag;
$vResultado = mysql_query($vSql, $link);
$total_registros=mysql_num_rows($vResultado);
?>
<table border=1>
<tr>
<td><b>Nombre</b></td>
<td><b>Edad</b></td>
<td><b>Fecha</b></td>
<td><b>Telefono</b></td>
</tr>
<?php
while ($fila = mysql_fetch_array($vResultado))
{
?>
<tr>
<td><?php echo ($fila['nombre']); ?></td>
<td><?php echo ($fila['edad']); ?></td>
<td><?php echo ($fila['fecha']); ?></td>
<td><?php echo ($fila['telefono']); ?></td>

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
</table><?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo $pagina . " ";
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='listado.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
<p>&nbsp;</p>
<a href="menu.html"> Volver al menu principal</a>
</body>
</html>

