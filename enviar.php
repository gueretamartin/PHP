<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="tincho_el77@outlook.com"; 
$asunto= $_POST['asunto'];
$desde='From:' .$_POST['mail'];
$comentario= "
\n
Nombre y Apellido: $_POST[nya]\n
Email: $_POST[mail]\n
Consulta: $_POST[cuerpo]\n
Enviado: $fecha a las $hora\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra
respuesta.";
?>
</body>
</html>