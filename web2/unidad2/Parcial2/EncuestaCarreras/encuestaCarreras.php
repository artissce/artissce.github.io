<html>
    <head>
        <title>Formulario de Carreras</title>
		<style>
            h1 {
				color:blue;
				text-shadow: 2px 2px lightblue;
}
            body{
				text-align:center;
                font-family: arial;
                
                background: rgb(148,187,233);
background: radial-gradient(circle, rgba(148,187,233,1) 0%, rgba(238,174,202,0.5116421568627452) 100%);
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
        <h1>Carreras en UPSLP</h1>
        <p>¿Que carrera te interesa estudiar?</p>
        <form action="encuestaCarreras.php" method="post">
            <input type="checkbox" name="Carrera1" value="1">ITI<br>
            <input type="checkbox" name="Carrera2" value="2">ITEM<br>
            <input type="checkbox" name="Carrera3" value="3">ISTI<br>
            <input type="checkbox" name="Carrera4" value="4">ITMA<br>
            <input type="checkbox" name="Carrera5" value="5">LAG<br>
            <input type="checkbox" name="Carrera6" value="6">LMI<br>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>

        <?php
		    function leerDatos($nombreArchivo, &$carrera){
		        $archivo = fopen($nombreArchivo, "r+");
		        for ($i=0; $i<6 && !feof($archivo); $i++)
		            fscanf($archivo, "%d\n", $carrera[$i]);
		        fclose($archivo);
		    }

		    function guardarDatos($nombreArchivo, &$carrera){
		        $archivo = fopen($nombreArchivo, "w");
		        for ($i=0; $i<6; $i++)
		            fprintf($archivo, "%d\n", $carrera[$i]);
		        fclose($archivo);
		    }

		    function grafica($datos){
		        
		    }
		?>

        <?php
        	if(!empty($_POST['enviar'])){
        		$datos = array(0, 0, 0, 0, 0, 0);
        		leerDatos("encuesta.txt", $datos);

        		for ($i=0;$i<6;$i++)
        			if(isset($_POST['Carrera'.($i+1)]))
        				$datos[$i]++;

        		grafica($datos);
        		guardarDatos("encuesta.txt", $datos);
        	}
        ?>
    </body>
	<footer> 
    <hr>
    <p style="text-align:center;">Ana Karen Cuenca Esquivel - 177932<br>UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web II</p>
	</footer>
</html>