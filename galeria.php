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
  
  <?php include('includes/controls.html'); ?>
  
  <?php include('includes/header-dark.html'); ?>

  <div class="banner-pages" id="banner-galeria">
    <h2>GALERIA</h2>
  </div>

  <main>
    <h1>
      Apresentamos aqui 205 fotografias de Jo&atilde;o Marcos Rosa, tiradas no per&iacute;odo 
      entre 19 e 27 de Abril de 2017, como parte da produ&ccedil;&atilde;o do &aacute;lbum de 
      fotos do programa <strong>AmazonFACE e Mudan&ccedil;as Clim&aacute;ticas na Regi&atilde;o 
      Amaz&ocirc;nica</strong> (financiada pelo CNPq, sob processo n&ordm; 441877/2016-8, 
      coordenado por David Lapola, Unicamp).
    </h1>
    <h1>
      O uso dessas imagens &eacute; permitido desde que os direitos autorais sejam reconhecidos 
      da seguinte forma: Jo&atilde;o M. Rosa/AmazonFACE
    </h1>
    <h1>
      D&uacute;vidas sobre o uso devem ser enviadas para <strong>site.amazonface.org@inpa.gov.br</strong>
    </h1>
  
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
                  'Alta Resolu&ccedil;&atilde;o' . 
                '</a>' .
              '</div>';
          }
        }
      ?>
    </div>
  </main>

  <?php include('includes/footer.html'); ?> 

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/sub-menu.js"></script>
  <script src="assets/js/magnific.popup.js"></script>
  <script>
    $.extend(true, $.magnificPopup.defaults, {
      tClose: 'Fechar (Esc)',
      tLoading: 'Carregando...',
      gallery: {
        tPrev: 'Anterior',
        tNext: 'Pr&oacute;xima',
        tCounter: 'Foto %curr% de %total%'
      },
      image: {
        tError: '<a href="%url%">N&atilde;o foi poss	&iacute;vel carregar a imagem.</a>'
      },
      ajax: {
        tError: '<a href="%url%">N&atilde;o foi poss	&iacute;vel carregar o conte&uacute;do.</a>'
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
