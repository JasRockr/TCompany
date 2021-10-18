<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="camisetas, estampados">
  <meta name="description" content="T-Company Es una tienda virtual de camisetas y estampación">
  <meta name="author" content="Yeison Rivera">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Titulo Pestaña -->
  <title>Diseña tu Camiseta | T-Company </title>
  <!-- Favicon: Place favicon.ico in the root directory -->
	<link rel="icon" href="icon.ico" type="image/x-icon"/>

  <!-- Web Manifest -->
  <link rel="manifest" href="site.webmanifest">
  <!-- Normalize -->
  <link rel="stylesheet" href="css/normalize.css">
  
  <!-- Lightbox, Colorbox -->
  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'index') {
      // Lightbox - Colorbox
      echo '<link rel="stylesheet" href="css/lightbox.css">
            <link rel="stylesheet" href="css/colorbox.css">';
    } else if ($pagina == 'galerias'){
        //Colorbox
        echo '<link rel="stylesheet" href="css/lightbox.css">';
      }
  ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
  
  <!-- Leaflet Maps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Deafult Bolierplate V8.0 -->
  <meta name="theme-color" content="#fafafa">

</head>

<body class='<?php echo $pagina ?>'>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  
  <!-- SECCION HEADER -->
  <header class="site-header">
    <div class="hero">
      <div class="contenido-header">
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        <div class="informacion-ubicacion">
          <h1 class="nombre-sitio">T-Company</h1>
          <p class="slogan">Damos vida a <span>tus ideas!</span></p>

          <div class="clearfix">
            <p class="ciudad">
              <a id="to-map" href="#map-location"> <i class="fas fa-map-marker-alt"></i> </a>
              Medellin, CO</p>
          </div>

        </div> <!-- .informaciónubicacion -->
      </div>

      <div class="scroll-mouse">
        <a class="scroll-link" href="#content">
          <svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
            <g fill="none" fill-rule="evenodd">
              <rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36"/>
              <circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#FFF"/>
            </g>
          </svg>
        </a>
      </div> <!-- .scroll-mouse -->
    </div> <!-- .hero -->
  </header>

<!--
  <div class="log-in">
    <a class="log-in-link" href="#">
      <i class="fab fa-keycdn"></i>
    </a>
  </div>
-->

  <!-- SECCION BARRA / MENU NAVEGACION -->
  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
            <img src="img/logoBear.svg" alt="logo" title="T-Company">
        </a>
      </div>
      
      <a href="#" class="menu-button [ js-menu-button ]">
        <div class="menu-icon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>

      <nav class="navegacion-principal clearfix">
        <a href="designer.php">Diseñar</a>
        <a href="galerias.php">Galeria</a>
        <a href="catalogo.php">Catalogo</a>
        <a href="productos.php">Productos</a>
        <a href="pedidos.php">Iniciar Pedido</a>
      </nav>

    </div> <!-- .contenedor -->
  </div> <!-- .barra -->
  