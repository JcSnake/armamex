<?php
    require_once('../../assets/frameworks/PHPMailer/PHPMailerAutoload.php');
			
        $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.webhost4life.com';
            $mail->SMTPAuth = true;
            $mail->Port = 587;  
            $mail->Username = "prueba@maspm.lat";
            $mail->Password = "Prueba123";

            $mail->setFrom('fatima.escom@gmail.com', $_POST['frmName']);
            $mail->addAddress($frmEmail);
            $mail->addReplyTo('no-reply@maspm.lat','No responder');

            $mail->Subject = 'Prueba PHPMailer SMTP';
            $mail->AltBody = 'Recibido';
            
            if (!$mail->send()) {
                echo "Error: " . $mail->ErrorInfo;
            } else {
                echo "Correo enviado!";
            }
?>
