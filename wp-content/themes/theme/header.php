<?php $hero5 = get_field('hero5');?>

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Nyambene Sub-County Hospital</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  


  <!-- theme meta -->
  <meta name="theme-name" content="medic" />
  
  <!-- ** Plugins Needed for the Project ** -->

  <?php wp_head();?>
  
</head>

<body>
  <div class="page-wrapper">

  

<!--header top-->
<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="top-left text-center text-md-left">
          <h6>Open 24 Hours</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          <ul class="social-links">
            <li>
              <a href="https://facebook.com/" aria-label="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/" aria-label="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            
           
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="<?php echo $hero5['logo_link'];?>">
            <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/logo.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
              <div class="icon-box">
                <i class="far fa-envelope"></i>
              </div>
              <strong>Email</strong>
              <br>
              <a href="mailto:nyambenedh@gmail.com">
                <span>nyambenedh@gmail.com&nbsp;</span>
              </a>
            </li>
            <li class="item text-left">
              <div class="icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <strong>Call Now</strong>
              <br>
              <span>+254704320847</span>
            </li>
          </ul>
          <div class="link-btn text-center text-lg-right">
            <a href="<?php echo $hero['link4'];?>" class="btn-style-one">Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarLinks"> 

      <?php 
      wp_nav_menu( array(
    'theme_location'  => 'top-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'ul',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarLinks',
    'menu_class'      => 'navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
              ) );
                 
      ;?>

    </div>
  </div>
</nav>
<!--End Main Header -->
