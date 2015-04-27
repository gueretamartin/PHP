<title>Modificacion</title>
</head>
<boby>
<?php
include ("conexion.inc");
//Captura datos desde el Form anterior
$vLegajo = $_POST['legajo'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT * FROM docentes_utn WHERE legajo ='$vLegajo' ";
$vResultado = mysql_query($vSql, $link) or die (mysql_error());;
$fila = mysql_fetch_array($vResultado);
if(mysql_num_rows($vResultado) == 0) {
 echo ("Usuario Inexistente...!!! <br>");
 echo ("<A href='formModi.html'>Continuar</A>");
}
else{
?>
<FORM action="modiProcesa.php" method="POST" name="modi">
<table width="356">
<tr>
 <td width="103"> Nombre: </td>
 <td width="243"> <input type="text" name="nombre" value="<?php echo($fila['nombre']); ?>" size="30" maxlength="30"> 
  </td>
</tr>

 <tr>
 <td width="103"> Apellido </td>
 <td width="243"> <input type="TEXT" name="apellido" size="30" maxlength="30"
 value="<?php echo($fila['apellido']); ?>">
 </td>
</tr>

 <tr>
 <td width="103"> Legajo </td>
 <td width="243"> <input type="TEXT" name="legajo" size="8" maxlength="8"
 value="<?php echo($fila['legajo']); ?>">
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