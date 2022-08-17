function ir(){
	var pass=usuario;
	var user="usuario";
	if(document.form.password.value==pass && document.form.login.value==user){
		alert("Bienvenido admin");
		window.location="contra.html";
	}
	else{
		alert("ERROR - Datos incorrectos");
	}
}