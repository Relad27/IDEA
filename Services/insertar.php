<?php
/*include ("conexion.php");
if(isset($_POST['enviar'])){
	if(strlen($_POST['name'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['telefono'])>=1 && strlen($_POST['comentario']>=1)){
		$nombre = trim($_POST["nombre"]);
		$correo = trim($_POST["correo"]);
		$telefono = trim($_POST["telefono"]);
		$comentario = trim($_POST["comentario"]);
		$insr = "insert into fomr_info(Nombre,Correo,Telefono,Descripcion) values ('$nombre','$correo','$telefono','$comentario')";
		$res = mysqli_query($conex,$insr);
		if($res){
			?>
			<h3>¡Tu comentario se envio con exito!</h3>
			<?php
		} else {
			?>
			<h3>¡Tu comentario no se envio con exito!</h3>
			<?php
		} else {
			?>
			<h3>¡Por favor llena todos los campos!</h3>
			<?php
		}
	}
}*/
?>

<?php
include("conexion.php");
if(isset($_POST['enviar'])){
	if(strlen($_POST['name'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['telefono'])>=1 && strlen($_POST['comentario']>=1)){
		$nombre = trim($_POST["nombre"]);
		$correo = trim($_POST["correo"]);
		$telefono = trim($_POST["telefono"]);
		$comentario = trim($_POST["comentario"]);
		$insr = "insert into fomr_info(Nombre,Correo,Telefono,Descripcion) values ('$nombre','$correo','$telefono','$comentario')";
		$res = mysqli_query($conex,$insr);
        if ($res) {
            ?>
            <h3>¡Tu comentario se envió con éxito!</h3>
            <?php
        } else {
            ?>
            <h3>¡Tu comentario no se pudo enviar!</h3>
            <?php
        }
    } else {
        ?>
        <h3>¡Por favor, completa todos los campos!</h3>
        <?php
    }
}
?>