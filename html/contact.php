<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> CONTACTO </title>

	<link rel="stylesheet" href="../header/header.css">
  	<link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../css/header-reponsive.css">


  	<link rel="stylesheet" href="../css/contact.css"> 

  	<!-- ICONOS REDES FOOTER -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- -------------------------- -->
    	    <!-- NAVEGACIÓN -->
    <!-- -------------------------- -->
    <div class="topnav" id="myTopnav">
      <img src="../img/conferro.jpg" alt="">  
      <a href="../index.php">INICIO</a>
      <a href="categories.php">PRODUCTOS</a>
      <a href="contact.php">CONTACTO</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()" id="btn-option">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <!-- DIV CONTACT -->
    <div class="container">
    	<form action="" method="POST">
	   		<div id="datos" class="containersContact">
	   			<h1> CONTACTO </h1>
	   			<label>Nombre</label>
	   			<input type="text" name="name" class="datosUsr" required>

    			<label>E-mail</label>
    			<input type="E-mail" name="email" class="datosUsr" required>

    			<label>Nro. Producto</label>
    			<input type="number" name="numProd" class="datosUsr" required>
    		</div>

    		<div id="message" class="containersContact">
    			<label>Mensaje</label>
    			<textarea placeholder="Escriba su consulta..." name="msg" required></textarea>
    			<input type="submit" name="btnEnviar" value="Enviar consulta">
    		</div>
    	</form>
    </div>

    <?php
    	include("../correo/correoConsulta.php");
    ?>

    <!-- -------------------------- -->
          	 <!-- FOOTER -->
    <!-- -------------------------- -->



    <script type="text/javascript" src="../js/main.js"></script> 
</body>
</html>