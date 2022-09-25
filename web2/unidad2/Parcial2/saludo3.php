<?php
/*strtoupper($palabra); // cambia a mayúscula
sort($palabra); //ordena ASC los caracteres
$pal1str_split(“hola");//”h”,”o”,”l”,”a”
implode('', $pal1);//”hola”
*/
$palabra1=$_POST['palabra1'];
$palabra2=$_POST['palabra2'];
strtoupper($palabra1);
strtoupper($palabra2);
$pal1 = str_split($palabra1);//”h”,”o”,”l”,”a”
$pal2 = str_split($palabra2);//”h”,”o”,”l”,”a”
sort($pal1);
sort($pal2);

if ($pal1 == $pal2)
{   
    echo "Las palabras ".$palabra1." y ".$palabra2." son anagramas";
}
else
{
    echo "Las palabras ".$palabra1." y ".$palabra2." NO son anagramas";
}
?>