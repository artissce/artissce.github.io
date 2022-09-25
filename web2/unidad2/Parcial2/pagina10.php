<!DOCTYPE html>
<html>
    <head>
        <style>
            div{
                color: blue;
                font-family:courier,arial;
                width: 100px;
                transition: width 2s;
            }
            div:hover {
            width: 300px;
            }
        </style>
    </head>
<body>
    <div>
        <?php
            $dia = array("domingo","lunes","martes","miercoles",
            "jueves","viernes","sábado");
            $dia_numero =date("w");//regresa el dia en el que estamos
            echo "Hoy es $dia[$dia_numero]<br>";
            echo "Numero de mes en el que estamos: " . date("n");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            echo "<br>Mes en el que estamos: ". $meses[date('n')-1];
        ?>
    </div>
    

</body>
<footer> 
    <hr>
    <p style="text-align:center;">Ana Karen Cuenca Esquivel - 177932<br>UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web I</p>
</footer>
</html>



