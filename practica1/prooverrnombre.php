<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
if (!isset($_POST['submit'])) {
?>
<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
Nombre: <input  name="nombre" size="20" >  
<input type="submit" name="submit" value="Aceptar">  
</form>
<?php
 } else{
 include "EJERCICIO9.php";
$nombre_usuario =$_POST['nombre'];
comprobar_nombre_usuario($nombre_usuario);
}
?>
</body>
</html>
