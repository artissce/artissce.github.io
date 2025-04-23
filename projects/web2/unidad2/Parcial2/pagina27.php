<html> 
    <head> 
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obtener promedio</title>
        <style>
            h1 {
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            text-align: center;
            }
            body{
                font-family: arial;
                text-align: center;
                color:white;
                background: rgb(63,94,251);
                background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,0.53125) 100%);
            img{
                shadow: 2px 2px;
            }
            img:hover{
                transform: rotate(360deg);
                transition:5s;
            }   
            
        </style> 
    </head> 
    <body> 
        <h1>Promedio</h1>
    <?php 
        function promedio($val1,$val2) { 
            $pro=$val1/$val2; 
            return $pro; 
        } 
        $n1=10;
        $n2=7; 
        $prom=promedio($n1,$n2);
        echo $prom; ?> 
    </body> 
    <footer> 
    <hr>
    <p style="text-align:center;">Ana Karen Cuenca Esquivel - 177932<br>UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web II</p>
    </footer>
</html>
    