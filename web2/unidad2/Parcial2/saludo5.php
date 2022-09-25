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
    