<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <link rel="icon" type="image/gif" href="../assets/imgs/logoupslp.jpg">
    <title>Administrador UPSLP</title>
    <!-- font icons -->
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="../assets/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="../assets/imgs/logoupslp.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">    
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="../administrador.html">pagina anterior</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Ciencia, Tecnologia y Cultura al servicio del ser humano</h1>
            <h1 class="title">Alta <br> Admin</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <div class="container" align="center">
    <h1>Rellena los datos</h1>
<form  method="post"> <!--action="<?php echo $_SERVER['PHP_SELF']; ?>"-->
Nombre:     <input type="text" name="nombre"> <br>
RFC:        <input type="text" name="rfc"> <br>
Mail:       <input type="text" name="correo"> <br>
<input type="submit" name="enviar">
</form>
<!--
<?php
include("config.php");
if(isset($_POST['nombre']) && isset($_POST['rfc']) && isset($_POST['correo']))
{
    echo "{$_POST['nombre']}<br>";
    echo "{$_POST['rfc']}<br>";
    echo "{$_POST['correo']}<br>";



   $conexion = mysqli_connect($server,$db_user,$db_pass) or die("Problemas en la conexion");
    if($conexion) {
        echo "se conecto exitosamente <br>";
        mysqli_select_db($conexion,$database)
        or die("Problemas en la seleccion de la base de datos");
        echo "se conecto exitosamente a bd<br>";
        $query= "INSERT INTO clientes (RFC, mail, nombre)
        VALUES ('$_POST[rfc]','$_POST[correo]','$_POST[nombre]');" ;
        echo "La consulta generada es:<br>" . $query;
        if(mysqli_query($conexion, $query)) echo "<br> datos guardados<br>";
        mysqli_close($conexion);
    }
}
else{
    if(isset($_POST['enviar'])){
        if(isset($_POST['nombre'])== false || $_POST['nombre'] == "")
            echo "Falta definir Nombre<br>";
        if(isset($_POST['rfc'])== false || $_POST['rfc'] == "")
            echo "Falta definir RFC<br>";
        if(isset($_POST['correo'])== false || $_POST['correo' ] == "")
            echo "Falta definir Correo<br>";
    }
}
?>-->
    </div>
    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Telefono</h6>
                    <p class="mb-4">+ 123-456-7890</p>

                    <h6 class="mb-0">Direccion</h6>
                    <p class="mb-4">C. Urbano Villalón 500, La Ladrillera, 78369 San Luis, S.L.P.</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">upslp@upslp.edu.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form>
                        <h4 class="mb-4">Escribenos</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Asunto">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Mensaje"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Enviar</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <br> Ana Karen Cuenca Esquivel - 177932 <br> Saul Cervantes Candia - 177927</p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
