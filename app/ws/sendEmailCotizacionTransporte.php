<?php
	
if(isset($_POST['cotizacionName']) && isset($_POST['cotizacionPhone']) && isset($_POST['cotizacionEmail']) && isset($_POST['cotizacionService']) && isset($_POST['cotizacionFletador']) && isset($_POST['cotOpt3Salida']) && isset($_POST['cotOpt3Peso']) && isset($_POST['cotOpt3Esolra']) && isset($_POST['cotOpt3Calado']) && isset($_POST['cotOpt3TRB']) && isset($_POST['otOpt3Entrada'])) {
	define('NOMBRE', $_POST['cotizacionName']);
	define('TELEFONO', $_POST['cotizacionPhone']);
    define('CORREO', $_POST['cotizacionEmail']);
    define('SERVICIO', $_POST['cotizacionService']);
    define('FLETADOR', $_POST['cotizacionFletador']);

	define('FECHA', $_POST['cotOpt3Salida']);
	define('CANTIDAD', $_POST['cotOpt3Peso']);
	define('TIPOCARGA', $_POST['cotOpt3Esolra']);
	define('SISTEMACARGA', $_POST['cotOpt3Calado']);
	define('SISTEMADESCARGA', $_POST['cotOpt3TRB']);
	define('ENTRADA', $_POST['otOpt3Entrada']);

    $sendEmailToUser = sendEmailTo(CORREO, 'user');
	echo $sendData = sendEmailTo('jc.cardenas.perez@gmail.com', 'service');
}
		
function sendEmailTo($to, $type) {
	require_once('../../assets/frameworks/PHPMailer/PHPMailerAutoload.php');
			
	if($type == 'user') {

		$subject = 'Confirmación de cotizacion.';
		$msgHTML = '<html><head><meta charset="UTF-8"><title>ARMAMEX</title></head><body>';
		$msgHTML .= '<table width="600" style="margin:0 auto;"><tr><td><img src="http://maspm.lat/mx/images/logo-maspm.svg" width="157" hright="55" alt="ARMAMEX Logo" style="display:block; margin:0 auto;"></td></tr>';
		$msgHTML .= '<tr><td>';
		$msgHTML .= 'NOMBRE: '.NOMBRE.',<br><br>Hemos recibido tu cotización correctamente, en breve nos pondremos en contacto con usted.<br><br>Saludos, el equipo de ARMAMEX.<br><br>Este correo es una notificación automática, favor de no responder al correo.<br><br>';
		$msgHTML .= '</td></tr></table>';
		$msgHTML .= '</body></html>';
		$msgPlain = 'Hemos recibido tu cotización correctamente, en breve nos pondremos en contacto con usted. Este correo es una notificación automática, favor de no responder.';
	} else {
		$subject = 'Datos enviados desde la página web acerca de una cotización de remolques';
		$msgHTML = '<html><head><meta charset="UTF-8"><title>ARMAMEX</title></head><body>';
		$msgHTML .= '<table width="600" style="margin:0 auto;"><tr><td><img src="http://maspm.lat/mx/images/logo-maspm.svg" width="157" hright="55" alt="ARMAMEX Logo" style="display:block; margin:0 auto;"></td></tr>';
		$msgHTML .= '<tr><td>';
		$msgHTML .= 'Hola, <br><br>Se enviaron los siguientes datos a través de la página web: <br><br>';
		$msgHTML .= '<ul><li>Nombre: '.NOMBRE.'</li><li>Teléfono: '.TELEFONO.'</li><li>Correo: '.CORREO.'</li><li>Fletador: '.FLETADOR.'</li><li>Servicio: '.SERVICIO.'</li><li>Fecha de embarque: '.FECHA.'</li><li>Cantidad: '.CANTIDAD.'</li><li>Tipo de carga: '.TIPOCARGA.'</li><li>Sistema de carga: '.SISTEMACARGA.'</li><li>Sistema de descarga: '.SISTEMADESCARGA.'</li><li>Entrada: '.ENTRADA.'</ul>';
		$msgHTML .= '</td></tr></table>';
		$msgHTML .= '</body></html>';
		$msgPlain = 'Hemos recibido tu cotización correctamente, en breve nos pondremos en contacto con usted. Este correo es una notificación automática, favor de no responder.';
	}
			
	$mail = new PHPMailer;
			
	$mail->isSMTP();
	$mail->Host = 'smtp.webhost4life.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'prueba@maspm.lat';
	$mail->Password = 'Prueba123';
	$mail->SMTPSecure = false;
	$mail->Port = '587';
	$mail->Timeout = 10;
			
	$mail->setFrom('no-responder@maspm.lat','MASPM');
	$mail->addAddress($to);
		
	$mail->isHTML(true);
			
	$mail->Subject = $subject;
	$mail->Body = $msgHTML;
	$mail->AltBody = $msgPlain;
			
	if($mail->send()) {
		return 1;
	} else {
		return '0,'.$mail->ErrorInfo;
    }
}

?>
