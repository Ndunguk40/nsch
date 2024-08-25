
<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/logo-2.png" alt="medic">
                </a>
              </figure>
            </div>
            <ul class="location-link">
        <li><h2>Get in Touch</h2></li>
          <li><p>Have any question? we'd love to hear from you</p></li>
              <li class="item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Murram Road Maua Igembe South Meru KENYA&nbsp;</p>
              </li>
              <li class="item">
                <i class="far fa-envelope" aria-hidden="true"></i>
                <a href="mailto:nyambenedh@gmail.com">
                  <p>nyambenedh@gmail.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <p>+254704320847</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li class="list-inline-item"><a href="https://facebook.com/" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>

            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
          <h2>Services</h2>
          <ul class="menu-link">
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Ent Clinic</a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Eye Clinic</a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dialysis</a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Paediatric Clinic</a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecology Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-7">
          <div class="social-links">
            <h2>Recent Posts</h2>


            <?php if( is_active_sidebar('footer-sidebar-1') ):?>

                <?php dynamic_sidebar('footer-sidebar-1');?>


              <?php endif;?>


          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright <?php echo date("Y");?> | Nyambene Sub-County Hospital - All Rights Reserved</p>
      </div>

      <ul class="footer-bottom-link">

  <?php 
      wp_nav_menu( array(
    'theme_location'  => 'footer-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'ul',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarLinks',
    'menu_class'      => 'nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
              ) );
                 
      ;?>
      
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>

<?php wp_footer();?>
</body>

</html>
