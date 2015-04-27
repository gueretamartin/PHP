<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario para el envío de e-mails</title>
</head>

<body>
<h1 > Formulario para el envio de mails</h1>

<!-- Formulario --> 

<form action="enviar.php" method="post" name="formulario">
<label>Nombre y Apellido  <input name="nya" type="text" size="30" /></label><br /><br />
<label>Mail:  <input name="mail" type="text" size="30" /></label><br /><br />
<label>Asunto: <input name="asunto" type="text" size="30" /></label><br /><br />
<label><textarea name="cuerpo" cols="80" rows="20"></textarea><br /><br />
<input name="enviar" type="submit" />
</form>

<!-- Fin del Formulario-->

</body>
</html>