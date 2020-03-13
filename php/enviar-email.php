<?php
	$subject 	  = 'AmazonFACE - Contato pelo Site';
	$user_name    = $_POST['nome'];
	$user_email   = $_POST['email'];
	$user_phone   = $_POST['telefone'];
	$user_message = $_POST['mensagem'];
	
	$email_to = 'cfascina@gmail.com';
	// $email_to = 'contato@amazon-face.org';
	$message =  'Nome: ' . $user_name . "<br />";
	$message .= 'E-mail:' . $user_email . "<br />";
	$message .= 'Telefone:' . $user_email . "<br />";
	$message .= 'Mensagem:<br />' . $user_message;

	$headers = "From: $user_email\r\n";
	$headers .= "Reply-To: $user_email\r\n";

	if(mail($email_to, $subject, $message)) {
		echo "E-mail enviado com sucesso!";
	}
	else {
		echo "Falha ao enviar e-mail.<br />";
		echo "Por favor, contate o administrador do site.";
	}
?>