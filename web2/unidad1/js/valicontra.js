function val(){
    var contra="";
	var error="";
    var dato1=document.getElementById("n").value;//usuario
	if(dato1=="") error+="Falta nombre<br>"
	else dato1=dato1.substring(0,1);

	var dato2=document.getElementById("ap").value;//contra
	if(dato2=="") error+="Falta apellido paterno<br>";
	else dato2=dato2.substring(0,2);
}