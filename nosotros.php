<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link href="includes\estilos1.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <!-- inicio encabezada -->
    <header id="home" class="headern">
    <div class="overlay"></div>
		<div class="header-content" style="background-color: #FFFFFF33">
			<div class="p">
                <br>
                <h6></h6>
				<h6>NOSOTROS</h6>
				<p class="p2">CREAMOS IDEAS, CONSTRUIMOS SUEÑOS</p>
                <br>
                <h6></h6>
			</div>
		</div>
    <?php 
    include_once("encabezado.php"); ?>
    </header>
    <!-- fin encabezadoa -->
    
    <!-- seccion 1 -->
    <section>
    <center>
    <h5 class="white-with-blue-shadow p1 h5c" style="margin-top: 100px;">Enfoque estratégico</h5>
    </center>
    <div class="container" class="p" class="margin-div" style="margin-top: 60px;">
			<img src="img\20943566_1.png" width="500px" align="right" class="img3">
            <br>
            <br>
            <br>
			<p class="p1 pc">Somos una empresa integra y dedicada al desarrollo profesional de paginas web.</p>
			<p class="p1 pc">Adaptamos nuestra tecnología a las ultimas tendencias, manteniendo el estándar de calidad y la experiencia de usuario para nuestros clientes.</p>
            <center>
            <button class="button" id="Boton1">Proceso de desarrollo</button>
            </center>
		</div>
        
        <div class="container" class="p" class="margin-div" style="margin-top: 250px;">
			<img src="img\empresa_1.png" width="500px" align="left" class="img3">
            <h5 class="white-with-blue-shadow p1 h5c" style="margin-left: 50px">¿QUIÉNES SOMOS?</h5>
            <br>
            <br>
			<p class="p1 pc">Disponibilidad, flexibilidad y optimización; características que siempre estarán presentes en su proyecto </p>
			<p class="p1 pc">Logre el alcance deseado en cualquier dispositivo. Facilitamos la visualización de su sitio web de forma responsiva.</p>
		</div>
    </section>
    <br>
    <br>
    <br>
    <!-- seccion 2 -->
    <section>
    <div class="conten" style="margin-top: 100px;">
		<h4 class="p1" id="Text">¿Te gustaría crear un proyecto con nosotros?</h4>
		<p class="p1" id="Text1">Nos adaptamos a tus necesidades y presupuesto.</p>
		<button class="button" id="Boton">Cotiza tu proyecto</button>
	  </div>
    </section>
<footer>
    <?php 
    include_once("includes\pie.php"); ?>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>