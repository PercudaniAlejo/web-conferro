<?php

#if (isset($_POST['btnEnviar'])) {
#
#	if (!empty($_POST['name']) && 
#		!empty($_POST['email']) && 
#		!empty($_POST['number']) && 
#		!empty($_POST['msg'])) {
#		$name = $_POST['name'];
#		$number = $_POST['number'];
#		$email = $_POST['email'];
#		$msg = $_POST['msg'];
#		
#		$header = "From: alejopercudani@outlook.com" . "\r\n";
#		$header.= "Reply-To: percudanialejo@gmail.com" . "\r\n";
#		$header.= "X-Mailer: PHP/". phpversion();
#		$mail = @mail($email, $number, $msg, $header);
#		if ($mail) {
#			echo "<h4> ¡consulta enviado! </h4>";
#		}
#	}
#}

	if (isset($_POST['btnEnviar']))
	{
        $nombre=$_POST['name'];
        $correo=$_POST['email'];
		$asunto =$_POST['numProd'];
        $mensaje=$_POST['msg'];
  		$enviar = 'percudanialejo@gmail.com';
		$header = 'From: ' . $correo;
		$msjCorreo = "Nombre: $nombre\n E-Mail: $correo\n ID. Producto: $asunto\n Mensaje:\n $mensaje";
	    if (@mail($enviar, $asunto, $msjCorreo, $header))
	    {
    		echo "<h4> Mensaje enviado </h4>";
		} else {
			echo 'Falló el envio';
		}
	}

?>