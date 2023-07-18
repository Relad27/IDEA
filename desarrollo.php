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
    <header id="home" class="headerd">
    <div class="overlay"></div>
		<div class="header-content" style="background-color: #FFFFFF33">
			<div class="p">
                <br>
                <h6></h6>
				<h6>DESARROLLO</h6>
				<p class="p2">TRANSFORMANDO IDEAS EN REALIDAD</p>
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
    <h5 class="white-with-blue-shadow p1 h5c" style="margin-top: 100px;">TECNOLOGÍAS CON LAS QUE TRABAJAMOS</h5>
    </center>
    <div class="wrapper">
    <div class="box"><img src="img\html.png" id="hta" alt="html"><img src="img\css-3.png" id="cass" alt="ccs-3"><img src="img\js 1.png"  id="jas" alt="js 1"><br>
    <img src="img\mysql.png" id="myas" alt="mysql"><img src="img\react.png" id="rea" alt="react"><img src="img\vue.png" id="vau" alt="vue">
    <img src="img\sass 1.png" id="sass" alt="sass 1"></div>    </div>        
    </section>
    <br>
    <br>
    <br>
    <!--Sección 2-->
    <section>
      <center>
    <h5 class="white-with-blue-shadow p1 h5c">TODO SE TRATA DE TI</h5>
    </center>
    <br>
    <br>
    <div class="container" >
    <div class="row">
      <div class="col-mb-2 col-md-4">
        <div class="card mb-3 border-0 rounded-0 shadow hoverable" id="card">
        <center>
            <p id="p12">Nuestra estrategia de<br>desarrollo inicia<br>desde abajo</p>
          </center>
          <img src="img\diagnostico 2.png" class="card-img-top mx-auto d-block custom-card-imgd" id="custom-card-imgd" alt="Imagen 1" width="32px">
          <div class="card-body">
            <center>
            <img src="img\numero-1.png" id="custom-card-img1" alt="numero-1" width="32px">
          </center>
          </div>
        </div>
      </div>
      <div class="col-mb-2 col-md-4">
        <div class="card mb-3 border-0  shadow hoverable" id="card">
        <center>
            <p id="p12">Trabajamos contigo para diseñar una solución enfocada en ti y tus usuarios</p>
          </center>
          <img src="img\diseno-grafico.png" class="card-img-top mx-auto d-block custom-card-imgdg" id="custom-card-imgdg" alt="diseno-grafico" width="32px">
          <div class="card-body">
            <center>
            <img src="img\numero-2.png" id="custom-card-img2" alt="numero-2" width="32px">
          </center>
          </div>
        </div>
      </div>
      <div class="col-mb-2 col-md-4">
        <div class="card mb-3 border-0  shadow hoverable" id="card">
        <center>
            <p id="p12">Trabajamos contigo para diseñar una solución enfocada en ti y tus usuarios</p>
          </center>
          <img src="img\proceso.png" class="card-img-top mx-auto d-block custom-card-imgd" id="custom-card-imgd" alt="proceso" width="32px">
          <div class="card-body">
            <center>
            <img src="img\numero-3 1.png" id="custom-card-img1" alt="numero-3 1" width="32px">
          </center>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <!-- seccion 3 -->
    <section>
      <center>
    <h5 class="white-with-blue-shadow p1 h5c">AÑADE A TU PROYECTO</h5>
    </center>
    <br>
    <br>
    <div class="container" >
    <div class="row">
      <div class="col-mb-2 col-md-3 offset-md-2">
        <div class="card mb-3 border-0 rounded-0 shadow hoverable" id="card">
        <center>
            <p id="p12">Renovación de diseño<br>web</p>
            <br>
            <p class="card-text pc" id="textos">Renovamos tu sitio web en diseño, optimización y listo para dispositivos móviles y de escritorio.</p>
          </center>
          <br>
          <img src="img\cepillo-de-pintura 1.png" class="card-img-top mx-auto d-block custom-card-imgd" id="custom-card-imgd" alt="cepillo-de-pintura 1" width="32px">
          <div class="card-body">
          </div>
        </div>
      </div>
      <div class="col-mb-2 col-md-3 offset-md-2">
        <div class="card mb-3 border-0  shadow hoverable" id="card">
        <center>
            <p id="pm"> Mantenimiento</p>
            <p class="card-text pc" id="textos">Contamos con planes de mantenimiento que se adaptan a cada necesidad y tu presupuesto.</p>
          </center>
          <br>
          <img src="img\mantenimiento 1.png" class="card-img-top mx-auto d-block custom-card-imgd" id="custom-card-imgd" alt="mantenimiento 1" width="32px">
          <div class="card-body">
          </div>
        </div>
      </div>
    </section>
    <!-- seccion 4 -->
    <section>
    <div class="contencm" style="margin-top: 100px;">
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