<html>
   <head><title>DATOS</title>
   <meta http-equiv="content_type" content="text/html; charset=iso-8859-1">
   <link rel="stylesheet" type="text/css" href="EstiloFormularioAlumno.css">
   </head>
   <body>
		<?php
			
			echo "<p>Matricula: ".$_POST['matricula']."</p>";
			echo "<p>Carrera: ".$_POST['carrera']."</p>";
			echo "<p>Semestre: ".$_POST['semestre']."</p><br>";
			echo "<h2>Materias:</h2>";

			if(isset($_POST['materia'])){
		    	$materias=$_POST['materia'];  
		    	for($i=0;$i<count($materias);$i++) 
		      		echo "<p>".$materias[$i]."</p>";
		    }
		?>
</body>
</html>