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
  
  <?php include('includes/controls.html'); ?>
  
  <?php include('includes/header-dark.html'); ?>

  <div class="banner-pages" id="banner-contato">
    <h2>CONTACT</h2>
  </div>

  <div class="contato contato-left container center-pages">
    <h1><img width="32" src="../assets/images/icones/endereco.svg">Address</h1>
    <div class="address">
      <address>
        AmazonFACE <br>
        Instituto Nacional de Pesquisas da Amaz&ocirc;nia (INPA) - Campus III <br>
        Av. Andr&eacute; Ara&uacute;jo 2936 - Manaus, Brasil <br>
        CEP 69037-675
      </address>
    </div>
    <h1><img width="32" src="../assets/images/icones/call.svg">Phone</h1>
    <p>+55 92 36431968 / 1820</p>

    <h1><img width="32" src="../assets/images/icones/email.svg">Contact</h1>

    <form method="POST" action="mail.php">
      <input type="text" name="nome" placeholder="full name">
      <input type="email" name="email" placeholder="E-mail">
      <input type="text" name="telefone" placeholder="Phone(Option)">
      <textarea name="mensagem" placeholder="Message"></textarea>
      <button>SEND</button>
    </form>
  </div>
  
  <?php include('includes/footer.html'); ?>

  <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/sub-menu.js"></script>

</body>
</html>
