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

function ubicacion(position) {
 var status = document.querySelector('#status');
 status.innerHTML = "Ubicado";
 var mapcanvas = document.createElement('div');
 mapcanvas.id = 'mapcanvas';
 mapcanvas.style.height = '400px';
 mapcanvas.style.width = '560px';
 document.querySelector('#map').appendChild(mapcanvas);
 var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
 var myOptions = {
 zoom: 15,
 center: latlng,
 mapTypeControl: false,
 navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
 mapTypeId: google.maps.MapTypeId.ROADMAP };
 var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

 var marker = new google.maps.Marker({
 position: latlng,
 map: map,
 title:"Usted está aquí."
 });
}

function error(msg) {
 var status = document.getElementById('status');
 status.innerHTML= "Error [" + error.code + "]: " + error.message; 
}

if (navigator.geolocation) {
 navigator.geolocation.getCurrentPosition(success, error,{maximumAge:60000, timeout: 4000});
} else {
 error('Su navegador no tiene soporte para su geolocalización');
}

