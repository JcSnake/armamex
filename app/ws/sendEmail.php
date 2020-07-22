<?php
	
if(isset($_POST['frmName']) && isset($_POST['frmPhone']) && isset($_POST['frmEmail'])) {
	define('NOMBRE', $_POST['frmName']);
	define('TELEFONO', $_POST['frmPhone']);
	define('CORREO', $_POST['frmEmail']);

	if(isset($_POST['frmMessage'])) {
		define('MENSAJE', $_POST['frmMessage']);
	} else {
		define('MENSAJE', 'No se envío un mensaje.');
	}
        
	$sendEmailToUser = sendEmailTo(CORREO, 'user');
	echo $sendData = sendEmailTo('jose.perez@maspm.lat', 'service');
}
		
function sendEmailTo($to, $type) {
	require_once('../../assets/frameworks/PHPMailer/PHPMailerAutoload.php');
			
	if($type == 'user') {
		$subject = 'Confirmación de registro MASPM.';
		$msgHTML = '<html><head><meta charset="UTF-8"><title>MASPM</title></head><body>';
		$msgHTML .= '<table width="600" style="margin:0 auto;"><tr><td><img src="http://maspm.lat/mx/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
		$msgHTML .= '<tr><td>';
		$msgHTML .= 'Hola '.NOMBRE.', <br><br>Gracias por registrarte con nosotros, pronto un ejecutivo se pondrá en contacto contigo para dar seguimiento a tu solicitud.<br><br>Saludos, el equipo de MASPM.<br><br>Este correo es una notificación automática, favor de no responder al correo.<br><br>';
		$msgHTML .= '</td></tr></table>';
		$msgHTML .= '</body></html>';
		$msgPlain = 'Gracias por registrarte con nosotros, pronto un ejecutivo se pondrá en contacto contigo para dar seguimiento a tu solicitud. Este correo es una notificación automática, favor de no responder.';
	} else {
		$subject = 'Datos enviados desde la página web';
		$msgHTML = '<html><head><meta charset="UTF-8"><title>MASPM</title></head><body>';
		$msgHTML .= '<table width="600" style="margin:0 auto;"><tr><td><img src="http://maspm.lat/mx/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
		$msgHTML .= '<tr><td>';
		$msgHTML .= 'Hola, <br><br>Se enviaron los siguientes datos a través de la página web: <br><br>';
		$msgHTML .= '<ul><li>Nombre: '.NOMBRE.'</li><li>Teléfono: '.TELEFONO.'</li><li>Correo: '.CORREO.'</li><li>Mensaje: '.MENSAJE.'</li></ul>';
		$msgHTML .= '</td></tr></table>';
		$msgHTML .= '</body></html>';
		$msgPlain = 'Gracias por registrarte con nosotros, pronto un ejecutivo se pondrá en contacto contigo para dar seguimiento a tu solicitud. Este correo es una notificación automática, favor de no responder.';
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
