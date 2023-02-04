<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset') ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php if(is_search()): ?>
    <meta name="robots" content="noindex, nofollow"/>
  <?php endif; ?>

  <title>totamto</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="ToTamto powstało z potrzeby wskazania dzieciom ich wyjątkowości i piękna otaczającego świata. Chcemy, by dzieci były ludźmi znającymi swoją wartość, by z ciekawością i spokojem szły przez życie własną drogą." />
  <meta name="keywords" content="Księgarnia, książki, książka, Czarna Owca, czarnaowca, totamto, ToTamto, imprint, imprint Wydawnictwa Czarna Owca, książki dla dzieci, czytam, to tamto" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="totamto">
  <meta property="og:description" content="ToTamto powstało z potrzeby wskazania dzieciom ich wyjątkowości i piękna otaczającego świata. Chcemy, by dzieci były ludźmi znającymi swoją wartość, by z ciekawością i spokojem szły przez życie własną drogą.">
  <meta property="og:image" content="share.jpg">
  <meta property="og:image:secure_url" content="share.jpg">
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <!-- <meta property="og:url" content="https://www.spaced.pl"> -->

  <!-- Meta Pixel Code -->
  <meta name="facebook-domain-verification" content="zsfgrdo08k2dli70t1j3euethsa21y" />

  <!--CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?29">
  <!-- <link rel="stylesheet" href="http://localhost/test-wp/wp-content/themes/totamto/style.css"> -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick.css" />
  <!-- Add the new slick-theme.css if you want the default styling -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick-theme.css" />
  <!-- slick lightbox for books post -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css" rel="stylesheet" />
  
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
  
  <?php wp_head() ?>

  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '686003778924235');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=686003778924235&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<!-- <body <php body_class() ?>> -->
<body>
  <!--HEADER SECTION-->
  <header>
    <nav class="nav-container">
      <div class="nav">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <!-- LOGO NAV -->
          <img class="nav_logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/logo_totamto.svg" alt="logo">
        </a>
        
        <!--MOBILE BURGER-->
        <div class="nav_mobile-items">
          <div class="nav_extras"> 
            <a href="https://www.czarnaowca.pl/" class="nav_extras-link" target="_blank">
              <img class="nav_extras-one " src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/czarna_owca_logo.svg" alt="Czarna Owca logo">
            </a>
            <a href="https://www.echa.com.pl/" class="nav_extras-link" target="_blank">
              <img class="nav_extras-two" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/echa-logo.svg" alt="Echa logo">
            </a>
          </div>
          <div class="mobile_btn nav_hamburger">
            <div class="mobile_btn-hamburger"></div>
          </div>
        </div>

        <!--MOBILE OVERLAY MENU-->
        <div id="mobileMenu" class="nav_overlay">
          <div class="nav_overlay-content">
              <?php wp_nav_menu(array(
                'name' => 'Główne Menu'
              )); ?>
              <?php get_search_form(); ?>
          </div>
        </div>

        <!--DESKTOP MENU-->
        <div class="nav_desktop-items">
          <div class="nav_extras"> 
            <?php get_search_form(); ?>

            <?php
            if ( have_rows('nav_logos', 'option') ) {
              while ( have_rows('nav_logos', 'option') ) {
                the_row();
                $nav_logo = get_sub_field('nav_logo', 'option');
                if ( !empty($nav_logo) ) {
            ?>
            <a href="<?php the_sub_field('nav_logo_link', 'option') ?>" target="_blank">
              <img class="nav_extras-logo" src="<?php echo $nav_logo['url']; ?>" alt="<?php echo $snav_logo['alt']; ?>" />
            </a>
            <?php
                }
              }
            }
            ?>
            <!-- <a href="https://www.czarnaowca.pl/" class="nav_extras-link" target="_blank">
              <img class="nav_extras-one " src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/czarna_owca_logo.svg" alt="Czarna Owca logo">
            </a>
            <a href="https://www.echa.com.pl/" class="nav_extras-link" target="_blank">
              <img class="nav_extras-two" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/echa-logo.svg" alt="Echa logo">
            </a> -->
          </div>
          
          <div class="nav_desktop-list">
            <?php wp_nav_menu(array(
              'name' => 'Główne Menu'
            )); ?>
          </div>
        </div>
      </div>

      <div class="nav_mobile-search">
        <?php get_search_form(); ?>
      </div>
    </nav>
  </header>
  
  <div class="social">
      <a class="social__link" href="https://www.facebook.com/czytamtotamto" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/fb-blue.svg" alt="facebook logo">
      </a>
      <a class="social__link" href="https://www.instagram.com/czytamtotamto" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/png/instagram.png" alt="instagram logo">
      </a>
      <a class="social__link" href="https://www.youtube.com/channel/UC8GP-e_WcDeH0G9ItcYrKIg" target="_blank">
        <div class="social__circle-yt">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/youtube.svg" alt="youtube logo">
        </div>
      </a>
  </div>