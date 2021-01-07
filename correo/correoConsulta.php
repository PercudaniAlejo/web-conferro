<?php
	
	if (isset($_POST['btnEnviar'])) {
   		$enviar = "percudanialejo@gmail.com";
		$asunto =$_POST['numProd'];
        $mensaje=$_POST['msg'];
        
		$nombre=$_POST['name'];
        $correo=$_POST['email'];
		$msjCorreo = "Nombre: $nombre\n E-Mail: $correo\n ID. Producto: $asunto\n Mensaje:\n\n $mensaje";
   		if (@mail($enviar, $asunto, $msjCorreo)) {
	    	echo "<h4> Mensaje enviado. </h4>";
		} else {
		  	echo "<h4> No se puesdado enviar el mensaje. </h4>";
		}
	}
?>