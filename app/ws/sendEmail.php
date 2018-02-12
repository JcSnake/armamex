<?php
	
	if(isset($_POST['frmName']) && isset($_POST['frmPhone']) && isset($_POST['frmEmail']) && isset($_POST['frmMessage'])) {
		define('NOMBRE', $_POST['frmName']);
		define('TELEFONO', $_POST['frmPhone']);
		define('CORREO', $_POST['frmEmail']);
        define('COMENTARIOS', $_POST['frmMessage']);
        
        $sendEmailToUser = sendEmailTo(CORREO, 'user');
    }
		
	function sendEmailTo($to) {
			require_once('../../assets/frameworks/PHPMailer/PHPMailerAutoload.php');
			
			if($to == 'user') {
				$subject = 'Confirmación de registro MASPM.';
				$msgHTML = '<html><head><meta charset="UTF-8"><title>MASPM</title></head><body>';
				$msgHTML .= '<table width="600" style="margin:0 auto;"><tr><td><img src="http://maspm.lat/mx/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
				$msgHTML .= '<tr><td>';
				$msgHTML .= 'Hola '.NOMBRE.', <br><br>Gracias por registrarte con nosotros, pronto un ejecutivo se pondrá en contacto contigo para dar seguimiento a tu solicitud.<br><br>Saludos, el equipo de MASPM.<br><br>Este correo es una notificación automática, favor de no responder al correo.<br><br>';
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
			
			$mail->setFrom('prueba@maspm.lat','MASPM Prueba');
			$mail->addAddress($frmEmail);
			
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