	<?php  
	$destino="info@elolimpo.net";
	$nombre=$_POST["name"];
	$apellido=$_POST["last"];
	$correo=$_POST["mail"];
	$empresa=$_POST["comp"];
	$telefono=$_POST["phone"];
	$mensaje=$_POST["mensaje"];
	$contenido="Nombre: " . $nombre ."\nApellido: " . $apellido ."\nCorreo: " .$correo ."\nEmpresa: " .$empresa ."\nTelefono: " . $telefono ."\nMensaje: " . $mensaje;

	mail($destino, "Mensaje de tu sitio web elolimpo.net",$contenido);
	header("Location:index.html");
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<!--Required meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>El Olimpo || Tecnología para Todos</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    <!--personal css-->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <!--favicon-->
    <link  rel="icon"   href="img/favicon.svg" type="image/svg" />
    <!--icons social -->
    <script src="https://kit.fontawesome.com/cdf029a8d7.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="contental">
			<h1 >Dijiste, ¡Hola!</h1>
			<p>Tu mensaje se ha enviado correctamente.</p>
			<p>Pronto estaremos dando respuesta a tu solicitud.</p>
			<a href="index.html" class="btn btn-dark btn-sm">Volver al Olimpo</a>
			</div>
		</div>
		
  
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
	</body>
	</html>
