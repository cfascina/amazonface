<?php
	/**
	 * Reference link: https://github.com/PHPMailer/PHPMailer/tree/5.2-stable/
	 */

	// SMTP needs accurate times, and the PHP time zone MUST be set
	// This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');

	require_once 'phpmailer-5.2/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$user_name    = $_POST['nome'];
	$user_email   = $_POST['email'];
	$user_phone   = $_POST['telefone'];
	$user_message = $_POST['mensagem'];

	// $mail->SMTPDebug Options:
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages

	// Old email at this file: contato@amazon-face.org

	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = "mail.inpa.gov.br";
	$mail->Port = 25;
	$mail->SMTPAuth = false;
	$mail->setFrom('site.amazonface.org@inpa.gov.br', 'AmazonFACE');
	$mail->addReplyTo($user_email, $user_name);
	$mail->addAddress('site.amazonface.org@inpa.gov.br', 'AmazonFACE');
	$mail->IsHTML(true);
	$mail->Subject = 'Mensagem do Site';
	$mail->Body =  '<b>Nome:</b> ' . $user_name . "<br />";
	$mail->Body .= '<b>E-mail:</b> ' . $user_email . "<br />";
	$mail->Body .= '<b>Telefone:</b> ' . $user_phone . "<br />";
	$mail->Body .= '<b>Mensagem:</b> ' . nl2br($user_message);

	// Send the message, check for errors
	if(!$mail->send()) {
		$response = "Desculpe, tivemos um erro ao enviar seu e-mail.";
	    // echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		$response = "E-mail enviado com sucesso!";
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AmazonFACE</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logo-amazonface.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="assets/estilos.css">
</head>
<body id="site">
  
  <?php include('includes/controls.html'); ?>
  
  <?php include('includes/header-dark.html'); ?>

  <div class="banner-pages" id="banner-contato">
    <h2>CONTATO</h2>
  </div>

  <div class="contato contato-left container center-pages">
    <h1 style="justify-content: center;"><?=$response; ?></h1>
  </div>

  <?php include('includes/footer.html'); ?> 

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/sub-menu.js"></script>

</body>
</html>
