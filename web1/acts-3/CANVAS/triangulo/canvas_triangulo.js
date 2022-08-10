function iniciar(){
var elemento=document.getElementById('lienzo');
lienzo=elemento.getContext('2d');
lienzo.beginPath();
// aquí va el trazado
lienzo.moveTo(0,0);
lienzo.lineTo(100,200);
lienzo.lineTo(0,200);
lienzo.closePath();
lienzo.stroke();
} 
window.addEventListener("load", iniciar, false);