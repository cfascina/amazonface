<?php
  /**
   * Reference link: https://github.com/PHPMailer/PHPMailer/tree/5.2-stable/
   */

  // SMTP needs accurate times, and the PHP time zone MUST be set
  // This should be done in your php.ini, but this is how to do it if you don't have access to that
  date_default_timezone_set('Etc/UTC');

  require_once '../phpmailer-5.2/PHPMailerAutoload.php';

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
    $response = "Sorry, we had an error sending your email.";
      // echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    $response = "Email successfully sent!";
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
    <link rel="stylesheet" href="../assets/estilos.css">
  </head>

  <body id="site">
    <div class="controls">
      <ul>
        <li><a href="../programa.html"><img width="24" src="../assets/images/icones/pt-BR.ico"></a></li>
        <li><a href="program.html"><img width="24" src="../assets/images/icones/en-US.ico"></a></li>
        <li><a target="_blank" href="https://www.facebook.com/amazonface/"><img width="24" src="../assets/images/icones/facebook.png"></a></li>
      </ul>
    </div>

    <header class="center-content">
      <div class="container">
        <div class="logotype">
            <a href="home.html"><img src="../assets/images/logo-amazonface.png"></a>
        </div>
        <input id="menu" class="menu__checkbox" type="checkbox" hidden>
        <label for="menu" class="menu-responsive">
          <img src="../assets/images/icones/menu-dark.svg">
        </label>

        <nav class="navigation">
          <ul class="flex">
            <li><a class="dark" href="home.html">Home</a></li>
            <li><a class="dark" href="context.html">Context</a></li>
            <li><a class="dark" href="program.html">Program</a></li>
            <li><a class="dark" href="people.html">People</a></li>
            <li class="has-children">
              <a class="dark" href="#">Publications</a>
              <ul class="children">
                <li><a class="dark" href="publications.html">Scientific Publications</a></li>
                <li><a class="dark" target="_blank" href="../assets/pdf/portaria-mcti-1038-2015-amazon-face.pdf">Ministerial Decree of AmazonFACE</a></li>
                <li><a class="dark" target="_blank" href="../assets/pdf/amazon-face-data-policy.pdf">AmazonFACE Data Policy</a></li>
              </ul>
            </li>
            <li><a class="dark" href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="banner-pages" id="banner-programa">
      <h2>CONTACT</h2>
    </div>

    <div class="contato contato-left container center-pages">
      <h1 style="justify-content: center;"><?=$response; ?></h1>
    </div>

    <footer class="footer">
      <img class="logo-footer" src="../assets/images/logo-white.png">
      <p>Assessing the effects of increased CO<sub>2</sub> on the resilience of the Amazon forest.</p>
      <img class="support-footer" src="../assets/images/apoios.png">
      <p class="copyright-footer">Copyright &copy; AmazonFACE.</p>
    </footer>

    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/sub-menu.js"></script>
  </body>
</html>
