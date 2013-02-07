function generar(){
	var a = Math.ceil(Math.random() * 9)+ '';
	var b = Math.ceil(Math.random() * 9)+ '';       
	var c = Math.ceil(Math.random() * 9)+ '';  
	var d = Math.ceil(Math.random() * 9)+ '';  
	var code = a + b + c + d;
	document.getElementById("txtCaptcha").value = code;
	document.getElementById("txtCaptchaDiv").innerHTML = code;
}
function checkform(theform){
	var e_msg = "";
	//Validaciones
	//Evitar campos vacíos
	if( !theform.ap_paterno.value || !theform.ap_materno.value || !theform.nombre.value || !theform.direccion.value || !theform.estado.value || !theform.municipio.value || !theform.telefono.value || !theform.correo.value || !theform.txtInput.value || !theform.contrasena.value || !theform.contrasena.value  ){
		e_msg += "- No deben quedar espacios sin completar.\n";
	}
	//Validacion de password
	if(theform.contrasena.value != theform.contrasena2.value)
	{
		e_msg += "- Las contraseñas no coinciden.\n";
	}
	//Nombres
	//Aceptar solamente caracteres alfabeticos (Apellidos y nombres)
	var regex= /^[a-zA-Z áéíóúüAÉÍÓÚÜÑñ]+$/;
	//Validacion de apellidos
	if(!regex.test(theform.ap_paterno.value))
	{
		e_msg += "- Ingrese solamente caracteres alfabéticos en el espacio 'Apellido Paterno'.\n";
	}
	if(!regex.test(theform.ap_materno.value))
	{
		e_msg += "- Ingrese solamente caracteres alfabéticos en el espacio 'Apellido Materno'.\n";
	}
	if(!regex.test(theform.nombre.value))
	{
		e_msg += "- Ingrese solamente caracteres alfabéticos en el espacio 'Nombre(s)'.\n";
	}
	//Validacion de Telefono
	var regex2= /^\d+$/;
	if(!regex2.test(theform.telefono.value))
	{
		e_msg += "- Ingrese solamente caracteres numéricos en el espacio 'Teléfono de contacto'.\n";
	}
	//Longitud del Telefono
	if(theform.telefono.value.length != 10)
	{
		e_msg += "- El número de teléfono debe tener 10 dígitos (Incluyendo la clave Lada).\n";
	}
	//Validacion de correo electronico
	var _at=theform.correo.value.indexOf("@");
	var _dot=theform.correo.value.lastIndexOf(".");
	if(_at<1 || _dot<_at+2 || _dot+2>=theform.correo.value.length)
	{
		e_msg += "- Ingrese una dirección de correo-e válida.\n";
	}
	//Validacion de Captcha
	if(!ValidCaptcha(theform.txtInput.value)){
			e_msg += "- El código de seguridad es incorrecto.\n";
	}
	if(e_msg != ""){
		alert("Por favor, verifique la información del formulario:\n\n" + e_msg);
		return false;
	}else{
	sendForm();
	}
}

// Funcion Validar Captcha   
function ValidCaptcha(){
	var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
	var str2 = removeSpaces(document.getElementById('txtInput').value);
	if (str1 == str2){
		return true;	
	}else{
		return false;
	}
}

// Quitar espacios del codigo generado
function removeSpaces(string){
	return string.split(' ').join('');
}
	