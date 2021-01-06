<?php
	
	if (isset($_POST['btnEnviar'])) {
		$nombre=$_POST['name'];
        $correo=$_POST['email'];
		$asunto =$_POST['numProd'];
        $mensaje=$_POST['msg'];
   		$enviar = 'percudanialejo@gmail.com';
		$header = 'From: ' . $correo;
		$msjCorreo = "Nombre: $nombre\n E-Mail: $correo\n ID. Producto: $asunto\n Mensaje:\n $mensaje";
   		if (@mail($enviar, $asunto, $mensaje, $header, $msjCorreo)) {
	    	echo "<h4> Mensaje enviado. </h4>";
		} else {
		  	echo "<h4> No se puedo enviar el mensaje. </h4>";
		}
	}
?>