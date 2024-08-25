
<?php
/*Template Name:Contact*/
get_header();
?>


<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php bloginfo('template_directory');?>/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="section contact">
  <!-- container start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 ">
        <!-- address start -->
        <div class="address-block">
          <!-- Location -->
          <div class="media">
            <i class="far fa-map"></i>
            <div class="media-body">
              <h3>Location</h3>
              <p>PO Box 60600-482<br>Maua</p>
            </div>
          </div>
          <!-- Phone -->
          <div class="media">
            <i class="fas fa-phone"></i>
            <div class="media-body">
              <h3>Phone</h3>
              <p>
                +254704320847
                <br>
              </p>
            </div>
          </div>
          <!-- Email -->
          <div class="media">
            <i class="far fa-envelope"></i>
            <div class="media-body">
              <h3>Email</h3>
              <p>
                nyambenedh@gmail.com
                <br>
              </p>
            </div>
          </div>
        </div>
        <!-- address end -->
      </div>
      <div class="col-lg-8 col-md-7">
        <div class="contact-form">
          <!-- contact form start -->
          <form action="https://formspree.io/f/moqokvwr" class="row" method="post">
            <!-- name -->
            <div class="col-lg-6">
              <input type="text" name="name" class="form-control main" placeholder="Name" required>
            </div>
            <!-- email -->
            <div class="col-lg-6">
              <input type="email" class="form-control main" placeholder="Email" required>
            </div>
            <!-- phone -->
            <div class="col-lg-12">
              <input type="text" class="form-control main" placeholder="Phone" required>
            </div>
            <!-- message -->
            <div class="col-lg-12">
              <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
            </div>
            <!-- submit button -->
            <div class="col-md-12 text-right">
              <button class="btn btn-style-one" type="submit">Send Message</button>
            </div>
          </form>
          <!-- contact form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->


  <!-- Google Map -->
  <div class="google-map">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7851802060236!2d37.94264477398442!3d0.23352776414882195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1788361f8f7bacd5%3A0x9f87c96663c3b6c6!2sNyambene%20Sub-County%20Hospital!5e0!3m2!1sen!2ske!4v1684089729971!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

<!--====  End of Google Map  ====-->



<?php get_footer();?>