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
	$mail->addAddress('cfascina@gmail.com', 'Caio Fascina');
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

    <div class="controls">
      <ul>
        <li><a href="contato.html"><img width="24" src="assets/images/icones/pt-BR.ico"></a></li>
        <li><a href="en-US/contact.html"><img width="24" src="assets/images/icones/en-US.ico"></a></li>
        <li><a target="_blank" href="https://www.facebook.com/amazonface/"><img width="24" src="assets/images/icones/facebook.png"></a></li>
      </ul>
    </div>

    <header class="center-content">
      <div class="container">
        <div class="logotype">
            <a href="index.html"><img src="assets/images/logo-amazonface.png"></a>
        </div>
        <input id="menu" class="menu__checkbox" type="checkbox" hidden>
        <label for="menu" class="menu-responsive">
          <img src="assets/images/icones/menu-dark.svg">
        </label>

        <nav class="navigation">
          <ul class="flex">
            <li><a class="dark" href="index.html">In&iacute;cio</a></li>
            <li><a class="dark" href="contexto.html">Contexto</a></li>
            <li><a class="dark" href="programa.html">Programa</a></li>
            <li><a class="dark" href="equipe.html">Equipe</a></li>
            <li class="has-children">
              <a class="dark" href="#">Publica&ccedil;&otilde;es</a>
              <ul class="children">
                <li><a class="dark" href="publicacoes.html">Publica&ccedil;&otilde;es Cient&iacute;ficas</a></li>
                <li><a class="dark" target="_blank" href="assets/pdf/portaria-mcti-1038-2015-amazon-face.pdf">Portaria Ministerial do AmazonFACE</a></li>
                <li><a class="dark" target="_blank" href="assets/pdf/amazon-face-data-policy.pdf">Pol&iacute;tica de Dados do AmazonFACE</a></li>
              </ul>
            </li>
            <li><a class="dark" href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="banner-pages" id="banner-contato">
      <h2>CONTATO</h2>
    </div>
    <div class="contato contato-left container center-pages">
      <h1 style="justify-content: center;"><?=$response; ?></h1>
    </div>

    <footer class="footer">
      <img class="logo-footer" src="assets/images/logo-white.png">
      <p>Avaliando os efeitos do aumento de CO2 na resili&ecirc;ncia da floresta amaz&ocirc;nica.</p>
      <img class="support-footer" src="assets/images/apoios.png">
      <p class="copyright-footer">Copyright &copy; AmazonFACE.</p>
    </footer>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/sub-menu.js"></script>
  </body>
</html>
