<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function combobox(x){

}
</script>
</head>

<body>
<?php
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$nombre = $_POST["nombre"];
?>
<h1>Creación del correo familiar</h1>
<form name="correo_familiar" action="confirmar.php" onsubmit="return validar_nombres()" >
<table>
<tr>
	<th>Miembro</th>
    <th>Nombre</th>
</tr>
<tr>
	<th>Padre</th>
    <td><?php echo $nombre.".".$apellido?></td>
</tr>
<tr>
	<th>Madre</th>
    <td><input type="text" name="nombre2" id="nombre2" /></td>
</tr>
<tr>
	<th>Hijo(a)</th>
    <td><input type="text" name="nombre3" id="nombre3" /></td>
</tr>
<tr>
	<th>Hijo(a)</th>
    <td><input type="text" name="nombre4" id="nombre4" /></td>
</tr>
<tr>
	<th>Hijo(a)</th>
    <td><input type="text" name="nombre5" id="nombre5" /></td>
</tr>
</table>
<input type="button" value="Agregar a otro miembro" onclick="agregar_miembro()" /><br />
<input type="submit" value="Enviar" />

</form>
<?php

?>
</body>
</html>