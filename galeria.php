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
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/magnific.popup.css">
</head>

<body id="site">

  <div class="controls">
    <ul>
      <li><a href="contexto.html"><img width="24" src="assets/images/icones/pt-BR.ico"></a></li>
      <li><a href="en-US/context.html"><img width="24" src="assets/images/icones/en-US.ico"></a></li>
      <li><a target="_blank" href="https://www.facebook.com/amazonface/"><img width="24"
            src="assets/images/icones/facebook.png"></a></li>
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
              <li><a class="dark" target="_blank" href="assets/pdf/portaria-mcti-1038-2015-amazon-face.pdf">Portaria
                  Ministerial do AmazonFACE</a></li>
              <li><a class="dark" target="_blank" href="assets/pdf/amazon-face-data-policy.pdf">Pol&iacute;tica de Dados
                  do AmazonFACE</a></li>
            </ul>
          </li>
          <li><a class="dark" href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="banner-pages" id="banner-contexto">
    <h2>GALERIA</h2>
  </div>

  <main>
    <div class="gallery">

      <?php
        $imgFiles = scandir('assets/images/gallery/thumb');

        foreach($imgFiles as $imgFile) {
          if(!is_dir($imgFile)) {
            $imgHighFile = substr_replace($imgFile, '', -3) . 'jpg';
            
            echo 
              '<div class="item">' .
                '<a href="assets/images/gallery/full/' . $imgFile . '" class="image-link">' .
                  '<img src="assets/images/gallery/thumb/' . $imgFile . '">' .
                '</a>' .
                '<a href="assets/images/gallery/high/' . $imgHighFile . '" class="download" target="_blank">' .
                  'Alta Resolução' . 
                '</a>' .
              '</div>';
          }
        }
      ?>

    </div>
  </main>

  <footer class="footer">
    <img class="logo-footer" src="assets/images/logo-white.png">
    <p>Avaliando os efeitos do aumento de CO<sub>2</sub> na resili&ecirc;ncia da floresta amaz&ocirc;nica.</p>
    <img class="support-footer" src="assets/images/apoios.png">
    <p class="copyright-footer">Copyright &copy; AmazonFACE.</p>
  </footer>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/sub-menu.js"></script>
  <script src="assets/js/magnific.popup.js"></script>
  <script>
    $.extend(true, $.magnificPopup.defaults, {
      tClose: 'Fechar (Esc)',
      tLoading: 'Carregando...',
      gallery: {
        tPrev: 'Anterior',
        tNext: 'Pŕoxima',
        tCounter: 'Foto %curr% de %total%'
      },
      image: {
        tError: '<a href="%url%">Não foi possível carregar a imagem.</a>'
      },
      ajax: {
        tError: '<a href="%url%">Não foi possível carregar o conteúdo.</a>'
      }
    });

    $('.image-link').magnificPopup({
      type: 'image',
      mainClass: 'mfp-with-zoom',
      zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function (openerElement) {
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      },
      gallery: {
        arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
        enabled: true,
        navigateByImgClick: false,
        preload: [0, 2],
      }
    });
  </script>
</body>

</html>