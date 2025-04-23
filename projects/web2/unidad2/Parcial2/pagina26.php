<html> 
    <head> 
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funciones</title>
        <style>
            h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px orange, 0 0 5px darkorange;
}
            body{
                font-family: arial;
                
                background: rgb(195,124,34);
background: linear-gradient(0deg, rgba(195,124,34,1) 0%, rgba(253,187,45,0.1026785714285714) 100%);}
            img{
                shadow: 2px 2px;
            }
            img:hover{
                transform: rotate(360deg);
                transition:5s;
            }   
            
        </style>
    </head> 
<body > 
    <h1>Funciones</h1>
    <?php
    function texto($saludo)
    {
      echo "<table width=\"75%\" border=\"1\">";
      echo "<tr><td align=\"center\">";
      echo $saludo;
      echo "</td></tr>";
      echo "</table>";
    }
    
    texto("Mensaje 1");
    echo "<br>";
    texto("Mensaje 2");
    
    ?> 
    
</body> 
<footer> 
    <hr>
    <p style="text-align:center;">Ana Karen Cuenca Esquivel - 177932<br>UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web II</p>
</footer>
</html>
