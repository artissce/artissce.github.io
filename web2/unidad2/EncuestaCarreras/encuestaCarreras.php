<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Carreras</title>
    <link rel="shortcut icon" href="../img/catlogo.png">.
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="../css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="https://artissce.github.io/web2/index2.html#presentaciones2" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="../img/logo.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="../img/logo.png" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="https://artissce.github.io/web2/index2.html#presentaciones2">Inicio</a></li>
                <li><a href="about-us.html">Anterior</a></li>             
                <li><a href="contact.html">Siguiente</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section-top-padding background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Encuesta carreras</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">¿Que carrera te interesa estudiar?</p>
            </div>  
          </header>
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Rellena los campos</h4>
              <form name="contactForm" class="customform" action="encuestaCarreras.php" method="post" >
                    <div class="s-12">
						<input type="checkbox" name="Carrera1" value="1">ITI<br>
						<input type="checkbox" name="Carrera2" value="2">ITEM<br>
						<input type="checkbox" name="Carrera3" value="3">ISTI<br>
						<input type="checkbox" name="Carrera4" value="4">ITMA<br>
						<input type="checkbox" name="Carrera5" value="5">LAG<br>
						<input type="checkbox" name="Carrera6" value="6">LMI<br>
						<br>
						<input class="s-12 submit-form button background-primary text-white" type="submit" value="Enviar" name="enviar">
					</div>
				</form>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Enviar</button></div>
              </form>
            </div>           
          </section> 
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

		<?php 
		echo "<table>";
		echo "<tr>";
		echo "<td>". $datos[0] ."</td>";
		echo "<td>". $datos[1] ."</td>";
		echo "<td>". $datos[2] ."</td>";
		echo "<td>". $datos[3] ."</td>";
		echo "<td>". $datos[4] ."</td>";
		echo "<td>". $datos[5] ."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[0]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[1]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[2]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[3]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[4]px' > </td>";
		echo "<td valign='bottom'> <img src='azul.png' width='40px' height='$datos[5]px' > </td>";
		echo "</tr>";

		echo "<tr>";
		echo "<th> ITI </th>";
		echo "<th> ITEM </th>";
		echo "<th> ISTI </th>";
		echo "<th> ITMA </th>";
		echo "<th> LAG </th>";
		echo "<th> LMI </th>";
		echo "</tr>";
		echo "</table>";
		?>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">TWITTER</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
          <a target="_blank" href="https://www.linkedin.com"><i class="icon-linked_in_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">LINKEDIN</span></a>                                                                         
        </div>

        <!-- Main Footer -->
        
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Ana Karen Cuenca Esquivel - 177932<br></p>
            <p class="text-size-12">UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web I</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="../owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script> 
  </body>
</html>