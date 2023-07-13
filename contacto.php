<!DOCTYPE html>
<html lang="en">
<head>
    <title>IDEA</title>
    <link href="includes\styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <header id="home" class="header1">
    <div class="overlay"></div>
		<div class="header-content" style="background-color: #FFFFFF33">
			<div class="p">
            <br>
            <h6>¡CONTACTANOS!</h6>
            <br>
			</div>
		</div>
    <?php 
    include_once("encabezado.php"); ?>
    </header>
    <section>
    <div class="container">
    <h5 class="titulo"><br>SOLICITA INFORMACIÓN PARA DESARROLLAR TU PROYECTO</h5>
    <p align="center">Contáctanos para comenzar la transformación digital en tu empresa y que tu único preocupación sea crecer tu negocio.  </p>
    <br>
	<p align="center">Ponemos a tu disposición el siguiente formulario para que te comuniques con nosotros ante cualquier duda.</p>
    <br>
    <br>
    <br>
    </div>    
    </section>
    <section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-img order-lg-2">
            <div class="p-5"><img class="img-fluid" width="700px" src="img/contacto.png" alt="..." /></div>
            </div>
            <br>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5" style="top: 200%;left: 100%;" >
            <form method = "post" action = "Services/insertar.php">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nombre completo">
                <label for="floatingInput" id="floatingLabel">Nombre completo</label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Correo electrónico">
                <label for="floatingInput" id="floatingLabel">Correo electrónico</label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Teléfono">
                <label for="floatingInput" id="floatingLabel">Teléfono</label>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatComment" placeholder="¿Cómo te podemos ayudar?">
                <label id="floatingLabel">¿Qué necesitas?</label>
                </div>
				<div style="text-align: center;">
                <input type="submit" name="boton" class="button" id="Boton" style="position: absolute;top: 89.6%;left: 39.5%;">
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </section>
    <footer>
    <?php 
    include_once("includes\pie.php"); ?>
    </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>