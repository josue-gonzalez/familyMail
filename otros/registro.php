<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FamilyMail.com.mx - Forma de registro</title>
<link rel="stylesheet" type="text/css" href="vista.css" media="all">
<script type="text/javascript" src="forma_validacion.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
</head>
<body id="main_body" >
<div id="header">
	
</div>
<div id="form_container">
<h1><a>Family Mail</a></h1>
<form id="form" action="answer.php" method="post" onsubmit="return checkform(this);">
    <p>
	<h2>Forma de Registro</h2>
	<p>Ingrese los siguientes datos, todos los espacios son requeridos.</p>
	</p>
	<p>
      <label for="ap_paterno">Apellido Paterno
      <input type="text" name="ap_paterno" id="ap_paterno" size="30" />
    </p>
	<p>
      <label for="ap_materno">Apellido Materno</label>
      <input type="text" name="ap_materno" id="ap_materno" size="30" />
    </p>
	<!--
	Dominio
	-->
	<p>
      <label for="contrasena">Contraseña</label>
      <input type="password" name="contrasena" id="contrasena" size="30" />
    </p>
	<p>
      <label for="contrasena2">Repetir contraseña</label>
      <input type="password" name="contrasena2" id="contrasena2" size="30" />
    </p>
	<p>
      <label for="nombre">Nombre(s)</label>
      <input type="text" name="nombre" id="nombre" size="30" />
    </p>
	<p>
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" id="direccion" size="30" />
    </p>
	<p>
      <label for="estado">Estado</label>
      <!--
	  <input type="text" name="estado" id="estado" size="30" />
		-->
		<select id="estado" name="estado">
		<option value="" selected="selected"></option>
		<option value="Aguascalientes" >Aguascalientes</option>
		<option value="Baja California" >Baja California</option>
		<option value="Baja California Sur" >Baja California Sur</option>
		<option value="Campeche" >Campeche</option>
		<option value="Chiapas" >Chiapas</option>
		<option value="Chihuahua" >Chihuahua</option>
		<option value="Coahuila" >Coahuila</option>
		<option value="Colima" >Colima</option>
		<option value="Distrito Federal" >Distrito Federal</option>
		<option value="Durango" >Durango</option>
		<option value="Guanajuato" >Guanajuato</option>
		<option value="Guerrero" >Guerrero</option>
		<option value="Hidalgo" >Hidalgo</option>
		<option value="Jalisco" >Jalisco</option>
		<option value="Estado de México" >Estado de México</option>
		<option value="Michoacán" >Michoacán</option>
		<option value="Morelos" >Morelos</option>
		<option value="Nayarit" >Nayarit</option>
		<option value="Nuevo León" >Nuevo León</option>
		<option value="Oaxaca" >Oaxaca</option>
		<option value="Puebla" >Puebla</option>
		<option value="Querétaro" >Querétaro</option>
		<option value="Quintana Roo" >Quintana Roo</option>
		<option value="San Luis Potosí" >San Luis Potosí</option>
		<option value="Sinaloa" >Sinaloa</option>
		<option value="Sonora" >Sonora</option>
		<option value="Tabasco" >Tabasco</option>
		<option value="Tamaulipas" >Tamaulipas</option>
		<option value="Tlaxcala" >Tlaxcala</option>
		<option value="Veracruz" >Veracruz</option>
		<option value="Yucatán" >Yucatán</option>
		<option value="Zacatecas" >Zacatecas</option>
		</select>
    </p>
	<p>
      <label for="municipio">Municipio</label>
      <input type="text" name="municipio" id="municipio" size="30" />
    </p>
	<p>
      <label for="telefono">Teléfono de contacto (Clave Lada + Número)</label>
      <input type="text" name="telefono" id="telefono" size="30" />
    </p>
	<p>
      <label for="correo">Correo-e</label>
      <input type="text" name="correo" id="correo" size="30" />
    </p>
	<p>
      <label for="code">Escriba el siguiente código: <span id="txtCaptchaDiv" style="color:#F00"></span><!-- codigo generado automaticamente --> 
      <input type="hidden" id="txtCaptcha" /></label><!-- codigo en casilla oculta -->
      <input type="text" name="txtInput" id="txtInput" size="30" autocomplete="off" /><!--coloque el codigo que ve en rojo aqui-->
    </p>
    <input type="button"  value="Enviar"  onclick="sendForm()" />
</form>
<script type="text/javascript">
//Genera funcion captcha    
	generar();	
	
	function sendForm()
	{
		$.post('functions/registraUsuario.php', {apellidoPaterno : $("#ap_paterno").val(), apellidoMaterno : $("#ap_materno").val()} , function (data) {
				console.log(data);
			})
		
	}
</script>
<div id="footer">
	&copy; 2013, FamilyMail.com.mx
</div>
</div>
</body>
</html>