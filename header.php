<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
  }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>"">
 <meta http-equiv=" X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Adelle Sans and Freight fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/uav3uxl.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5cfb25cc08.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <header id="desktop_menu" class="sticky-top">
    <section id="menu_section" class="grey-bg text-center">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="faremos navbar-brand font-weight-bold" href="<?php echo get_site_url(); ?>">Faremos</a>
        <nav id="main_menu">
          <?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'depth'          => 1,
							'container'      => false
						) ); 
          ?>
        </nav>
        <div class="call-to-action"><a href="#">Participe</a></div>
      </div>
    </section>
  </header>

  <header id="responsive_menu" class="sticky-top bg-white">
    <div class="container">
      <nav class="navbar navbar-light">
        <a class="navbar-brand font-weight-bold" href="<?php echo get_site_url(); ?>">Faremos Palmares de Novo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
          <?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'depth'          => 1,
							'container'      => false
						) ); 
          ?>
        </div>
      </nav>
    </div>
  </header>