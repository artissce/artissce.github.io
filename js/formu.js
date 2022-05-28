function iniciar(){
    var boton=document.getElementById('grabar');
    boton.addEventListener('click', nuevoitem, false);
    mostrar();
}

function nuevoitem(){
    var clave=document.getElementById('clave').value;
    var valor=document.getElementById('texto').value;
    var correo=document.getElementById('email').value;
    localStorage.setItem(clave,valor,email);
    mostrar();
    
    document.getElementById('clave').value=''; 
    document.getElementById('texto').value='';
    document.getElementById('email').value='';

}

function mostrar(){ 
    var cajadatos=document.getElementById('cajadatos');
    cajadatos.innerHTML='';
    for(var f=0;f<localStorage.length;f++){
        var clave=localStorage.key(f);
        var valor=localStorage.getItem(clave);//***** */
        //var correo=localStorage.getItem();
        cajadatos.innerHTML+='<div>'+clave+' - '+valor+'</div>';
        //cajadatos.innerHTML+='<div>'+clave+' - '+valor+'-'+correo +'</div>';
    }
}
window.addEventListener('load', iniciar, false);

function elimina(){
    if(confirm('Está seguro de querer borrar los datos?')){
        localStorage.clear();
        mostrar();
    }
}

