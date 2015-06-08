<title>Modificacion</title>
</head>
<boby>
<?php
include ("conection.inc");
//Captura datos desde el Form anterior
$vNombre = $_POST['nombre'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM Socios WHERE nombre ='$vNombre' ";
$vResultado = mysql_query($vSql, $link) or die (mysql_error());;
$fila = mysql_fetch_array($vResultado);
if(mysql_num_rows($vResultado) == 0) {
 echo ("Usuario Inexistente...!!! <br>");
 echo ("<A href='formModi.html'>Continuar</A>");
}
else{
?>
<FORM action="modiProc.php" method="POST" name="modi">
<table width="356">
<tr>
 <td width="103"> Nombre: </td>
 <td width="243"> <input type="text" name="nombre" value="<?php echo($fila['nombre']); ?>" size="40" maxlength="40"> 
  </td>
</tr>

 <tr>
 <td width="103"> DNI </td>
 <td width="243"> <input type="TEXT" name="apellido" size="9" maxlength="9"
 value="<?php echo($fila['dni']); ?>">
 </td>
</tr>

 <tr>
 <td width="103"> Actividad </td>
 <td width="243"> <input type="TEXT" name="actividad" size="40" maxlength="40"
 value="<?php echo($fila['actividad']); ?>">
 </td>
</tr>

 <tr>
 <td width="103"> Dias </td>
 <td width="243"> <input type="TEXT" name="dias" size="1" maxlength="1"
 value="<?php echo($fila['dias']); ?>">
 </td>
</tr>
	




 <tr>
 <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">
 </td>
 </tr>
</table>
</FORM>
<?php
}
// Liberar conjunto de resultados
mysql_free_result($vResultado);
// Cerrar la conexion
mysql_close($link);
?> 