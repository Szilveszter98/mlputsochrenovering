<?php

namespace WA\WP;



?>


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="3R4nSOvMqN3Rpsw_rsGsCn3kaoV3GChYBMh_nw6k8lE" />
  <script src="https://kit.fontawesome.com/742bd7cf3c.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../../../../mlputsochrenovering/node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <?php wp_head() ?>

<body <?php body_class() ?>>

  <header id="header" class="header">
    <div class="headerContainer">
      <div class="logoContainer">
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>"> ML puts & renovering</a>
        </div>

      </div>

      <div id="hamburger-menu"><i class="fas fa-bars fa-2x"></i></div>


    </div>
    <div class="menus" id="menus">

      <?php wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container'      => 'nav',
      ]); ?>
      <div class="menuLogoContainer">
        <img class="menuLogo" src="https://i.ibb.co/Xk8w061/Frame-17.png" alt="">
      </div>
    </div>
  </header>