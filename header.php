<?php include("config.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= $uri ?>/node_modules/img/favicon.ico" />
    

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $uri ?>/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="<?= $uri ?>/node_modules/bootstrap/compiler/style.css">
    <style>
      
      #smartzap_chat_btn_iframe {
        margin-bottom: -8px !important;
      }
      
    </style>
    <title>Logtel Internet</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14QHR4DWLW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-14QHR4DWLW');
    </script>
  </head>
  <body>

    <nav class="navbar  navbar-expand-lg  navbar-light navegacao">
      <div class="container">
          <button class="navbar-toggler custom text-danger" type="button" data-toggle="collapse" data-target="#menu"
              aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso"><i class="fa fa-bars " aria-hidden="true"></i>
          </button>
          <!-- aparecer apenas no mobile d-xl-none -->
          <spam class=" d-xl-none">
            <ul class="social-network social-circle">
              <li><a target="_blank" href="http://www.logtelplay.com.br/" class="logtelplay" title="Logtel Play"><i class="fa fa-play-circle"></i></a></li>
              <li><a target="_blank" href="https://www.facebook.com/logtel.internet/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/logtel_internet" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/logtel_internet/" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/logtel_internet" class="icoTwitter" title="Telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
            </ul>
          </spam>
          <spam class="pt-2 pb-2 pl-1 pr-1">
            <a href="http://www.logteltelecom.com.br/site"><img src="<?= $uri ?>/node_modules/img/logo/logo-logtel-oficial-mini.png"></a>
          </spam>

          <div id="menu" class="collapse navbar-collapse justify-content-center md-auto ">
            <ul class="navbar-nav links mx-auto text-center ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= $uri ?>/corporativo">PARA VOCÊ</a>
              </li>
              <li class="nav-item">
                <spam class="line-left">
                <a  class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= $uri ?>/corporativo/index.php">PARA SEU NEGÓCIO</a>
              </li>
              <li class="nav-item">
                <spam class="line-left">
                <a target="_blank" class="nav-link dropdown-toggle" href="http://www.logtelplay.com.br/">LOGTEL PLAY <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
              </li> 
            </ul>
          </div>

          <!--  não aparecer no mobile d-none d-xl-block -->
          <div class="text-danger mt-4 mb-4 d-none d-xl-block">
            <ul class="social-network social-circle">
              <li><a target="_blank" href="http://www.logtelplay.com.br/" class="logtelplay" title="Logtel Play"><i class="fa fa-play-circle"></i></a></li>
              <li><a target="_blank" href="https://www.facebook.com/logtel.internet/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/logtel_internet" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/logtel_internet/" class="instagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/logtel_internet" class="icoTwitter" title="Telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
     
    <nav class="navbar navbar-expand-lg navbar-light navegacao ">  
      <div class="container">

          <div id="menu" class="collapse navbar-collapse justify-content-center md-auto text-center">
            <ul class="navbar-nav links mx-auto col-md-8 text-center">
              <li class="nav-item">
                <a class="nav-link" href="<?= $uri ?>/#nossosPlanos">NOSSOS COMBOS</a>
              </li>
              <li class="nav-item">
                <spam class="line-left">
                <a class="nav-link" href="<?= $uri ?>/views/empresa.php">EMPRESA</a>
              </li>
              <li class="nav-item">
                <spam class="line-left">
                <a class="nav-link" href="<?= $uri ?>/views/faleConosco.php">FALE CONOSCO</a>
              </li>
              <!-- 
              <li class="nav-item">
                <a class="nav-link" href="<?= $uri ?>/views/faleConosco.php">FALE CONOSCO</a>
              </li>
              -->
              <li class="nav-item">
                <spam class="line-left">
                <a  class="nav-link" href="<?= $uri ?>/views/homeService.php">HOME SERVICE<i class="fa fa-home ml-1" aria-hidden="true"></i></a>
              </li>
              <li class="nav-item ">
                <spam class="line-left">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_areadocliente">
                  ÁREA DO CLIENTE
                </a>
              </li>
            </ul>
          </div>
      </div>
    </nav>