<html>
   <head><title>DATOS</title>
   <meta http-equiv="content_type" content="text/html; charset=iso-8859-1">
   <link rel="stylesheet" type="text/css" href="EstiloFormularioAlumno.css">
   </head>
   <body>
		<?php
			/*
			echo "<p>Matricula: ".$_POST['matricula']."</p>";
			echo "<p>Carrera: ".$_POST['carrera']."</p>";
			echo "<p>Semestre: ".$_POST['semestre']."</p><br>";
			echo "<h2>Materias:</h2>";

			if(isset($_POST['materia'])){
		    	$materias=$_POST['materia'];  
		    	for($i=0;$i<count($materias);$i++) 
		      		echo "<p>".$materias[$i]."</p>";
		    }
			*/

			if(isset($_POST['enviar'])){
				echo "<h2>Matricula escrita</h2>";
				if(empty($_POST['matricula'])){
					echo "No hay matricula </p>";
				}else{
					echo "<p>Matricula: ".$_POST['matricula']."</p>";
				}

				echo "<h2>Carrera seleccionada</h2>";
				if(empty($_POST['carrera'])){
					echo "No hay carrera </p>";
				}else{
					echo "<p>Carrera: ".$_POST['carrera']."</p>";
				}


				echo "<h2>Semestre seleccionado</h2>";
				if(empty($_POST['semestre'])){
					echo "No hay semestre </p>";
				}else{
					echo "<p>Semestre: ".$_POST['semestre']."</p>";
				}
				
				echo "<h2>Materias seleccionadas</h2>";
				if(isset($_POST['materia'])){
					$materias=$_POST['materia'];  
					for($i=0;$i<count($materias);$i++) 
						echo "<p>".$materias[$i]."</p>";
				}else{
					echo "No hay materias";
				}

			}

/*
			if(isset($_POST['matricula'])){
				echo "<p>Matricula: ".$_POST['matricula']."</p>";
			}else{
				echo "No hay datos";
			}

			if(isset($_POST['carrera'])){
				echo "<p>Carrera: ".$_POST['carrera']."</p>";
			}else{
				echo "<p>Carrera: No hay datos</p>";
			}

			if(isset($_POST['semestre'])){
				echo "<p>Semestre: ".$_POST['semestre']."</p>";
			}else{
				echo "<p>Semestre: No hay datos</p>";
			}

			if(isset($_POST['materia'])){
				$materias=$_POST['materia'];  
				for($i=0;$i<count($materias);$i++) 
					echo "<p>".$materias[$i]."</p>";
			}else{
				echo "No hay datos";
			}
*/
			
/*
			if(isset($_POST['matricula']) && isset($_POST['carrera']) && $_POST['semestre'] ="")
			{
				echo "<p>Matricula: ".$_POST['matricula']."</p>";
				echo "<p>Carrera: ".$_POST['carrera']."</p>";
				echo "<p>Semestre: ".$_POST['semestre']."</p><br>";
				echo "<h2>Materias:</h2>";

				if(isset($_POST['materia'])){
					$materias=$_POST['materia'];  
					for($i=0;$i<count($materias);$i++) 
						echo "<p>".$materias[$i]."</p>";
				}
			}else{
				if(isset($_POST['enviar'])){
					echo "<p>Matricula: No hay datos</p>";
					echo "<p>Carrera: No hay datos</p>";
					echo "<p>Semestre: No hay datos </p><br>";
					echo "<h2>Materias: No hay datos</h2>";
					echo"<b>Faltan datos</b>";
				}
			}
*/


		?>
</body>
</html>