<!DOCTYPE html>
<html lang="en">
<head>
    <title>IDEA</title>
    <link href="includes\estilos1.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <header id="home" class="header">
    <div class="overlay"></div>
		<div class="header-content" style="background-color: #FFFFFF80">
			<div class="p">
				<h6>Si puedes soñarlo,</h6>
				<h6>podemos desarrollarlo.</h6>
			</div>
		</div>
    <?php 
    include_once("encabezado.php"); ?>
    </header>
    <section>
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="img\diagnostico.png" class="card-img-top mx-auto d-block custom-card-img" alt="Imagen 1">
          <div class="card-body">
            <h5 class="card-title p1">Diagnostico</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, 
                ac aliquet odio mattis. Class aptent taciti sociosqu</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="img\diseño.png" class="card-img-top mx-auto d-block custom-card-img" alt="Imagen 2">
          <div class="card-body">
            <h5 class="card-title p1">Diseño</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="img\implementacion.png" class="card-img-top mx-auto d-block custom-card-img" alt="Imagen 3">
          <div class="card-body">
            <h5 class="card-title">Implementacion</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <section>
    <div class="container" class="p" class="margin-div">
			<img src="img/dispositivos.jpeg" width="700px" align="right" class="img3">
			<h5 class="white-with-blue-shadow p1">Tu Sitio Web en todos los dispositivos</h5>
			<p class="p1">Disponibilidad, flexibilidad y optimización; características que siempre estarán presentes en su proyecto </p>
			<p class="p1">Logre el alcance deseado en cualquier dispositivo. Facilitamos la visualización de su sitio web de forma responsiva.</p>
		</div>
    </section>
    <section>
    <div>
        <h2>hola</h2>
    </div>
    </section>
    <section>
    <div>
        <h2>hola</h2>
    </div>
    </section>
    <footer>
    <?php 
    include_once("includes\pie.php"); ?>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>