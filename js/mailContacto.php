<?php
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $tema = $_POST['tema'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['mensaje'];
  
    

   $email_from = "noreply@propiedadesycapitales.org";

   $email_to = "eliascolon98@gmail.com";


   $message = '<html>'.
    '<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">'.
    '<title>CLIENTE INTERESADO EN CONSIGNAR SU INMUEBLE - WEB</title>'.
    '</head>'.
    '<body>'.
    '<p>'.'<b>'.'Email del cliente: '.'</b>' . $email . '<br></p>'.
    '<p>'.'<b>'.'Nombres del cliente: '.'</b>' . $nombre . '<br></p>'.
    '<p>'.'<b>'.'Telefono de contacto del cliente: '.'</b>' . $telefono . '<br></p>'.
    '<p>'.'<b>'.'Tema: '.'</b>' . $tema . '<br></p>'.
    '<p>'.'<b>'.'Comentario: '.'</b>' .  '<br></p>'.
    '<p style="width: 80%; height: 50px; border: 1px solid #fff;">'.$comentario .'</p>'.
    '</body>'.
    '</html>';
	
	// create email headers
 $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
                'Reply-To:'. $email_from . "\r\n" .
                'From:' . $email_from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $email = @mail($email_to, "CLIENTE INTERESADO EN CONSIGNAR SU INMUEBLE - WEB", wordwrap($message), $headers);
    if ($email) {
        echo'<script type="text/javascript">
    alert("Correo Enviado")
    window.location.href="../contactanos.html";
    </script>';
    
    } else {
        echo 2;
    }
} else {
	echo 2;
}
?>