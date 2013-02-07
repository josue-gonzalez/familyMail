<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Forma de registro</title>
</head>
<body>
<?php
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["municipio"];
$estado = $_POST["estado"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
//	$cad = $ap_paterno." ".$ap_materno." ".$nombre." ".$direccion." ".$ciudad." ".$estado." ".$telefono." ".$correo;
$cad = "<br /><b>Apellido paterno</b>: ".$ap_paterno."<br /><b>Apellido materno</b>: ".$ap_materno."<br /><b>Nombre(s)</b>: ".$nombre."<br /><b>Dirección</b>: ".$direccion."<br /><b>Ciudad</b>: ".$ciudad."<br /><b>Estado</b>: ".$estado."<br /><b>Teléfono de contacto</b>: ".$telefono."<br /><b>Correo alterno</b>: ".$correo;

$h = "From: ".$correo."\r\n";
$h.= "Return-path: josue.super7@hotmail.com\r\n";
$h.= "Content-Type: text/html; charset=UTF-8\r\n";

mail("vortexwebdesign@gmail.com", "Petición de correo-e personalizado", $cad/*, $h*/) or die ("Error. Vuelva a mandar su mensaje mas tarde.");

/*
//ENVIAR CORREO:
$headers="From: ".$correo."\r\n";
//$headers.= "Return-path: josue.super7@hotmail.com\r\n";
$headers.= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to, $subject, $cad, $headers) or die ("Error. Vuelva a mandar su mensaje mas tarde.");
echo "<b>Gracias por su preferencia.</b><br />Pronto le enviaremos a su cuenta de correo alterna la información de disponibilidad de su correo personalizado.<br /><br />";
*/
echo $cad;
?>
</body>
</html>