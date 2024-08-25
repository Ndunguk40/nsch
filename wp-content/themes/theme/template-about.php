
<?php
/*Template Name:About*/
get_header();
?>
<?php $hero1 = get_field('hero1');?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url('<?php the_post_thumbnail_url();?>') !important; background-size:cover !important">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $hero1['main_title'];?></h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo $hero1['link'];?>"><?php echo $hero1['link_text'];?> &nbsp;/</a>
                </li>
                <li>about us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Our Story -->


<?php $info = get_field('about_information');?>

<section class="story">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" src="<?php bloginfo('template_directory');?>/images/gallery/gallery-01.jpg" class="responsive" alt="story">
      </div>
      <div class="col-lg-6">
        <div class="story-content">
          <h2><?php echo $info['blog_title'];?></h2>

          <p>  <?php echo $info['text_right'];?></p>
       
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Promo Video 
<section class="promo-video">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="block text-center">
          <h6></h6>
          <h1>About <br>
            Our Hospital
          </h1>
          <a data-fancybox
            href="https://www.youtube.com/watch?v=R3KDMnHOwng"><i class="fas fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>-->


<!-- Gallery Section -->

<?php if( have_rows('gallery') ): ?>  

<section class="gallery bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Collected Shots
            <span>of Our Hospital</span>
          </h3>
          <p><br></p>
        </div>
      </div>

   
  <?php while( have_rows('gallery') ): the_row();

              $image = get_sub_field('image');
              $title = get_sub_field('title');

    ?>    
      <div class="col-lg-4 col-md-6">      
        <div class="gallery-item">
          <img loading="lazy" src="<?php echo $image['url'];?>" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="<?php echo $image['url'];?>"></a>
          <h3><?php echo $title;?></h3>
          <p></p>
        </div>
      </div>
     
  <?php endwhile; ?>  

     
    </div>
  </div>
</section>

<?php endif; ?>

<!-- End of Gallery Section -->


<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="accordion-section">
  <div class="section-title">
    <h3>FAQ</h3>
  </div>
  <div class="accordion-holder">
    <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h4 class="card-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Why Choose us?
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
          <div class="card-body"> 
			  <ul>
			<li><i class="fas fa-caret-right"></i>The pioneer in healthcare in the region with over 25 years of experience.</li>
            <li><i class="fas fa-caret-right"></i>Provide patients access to the latest and most reliable diagnostic and treatment technologies.</li>
            <li><i class="fas fa-caret-right"></i>Outstanding support staff to cater to your health needs.</li>
            <li><i class="fas fa-caret-right"></i>Exceptional calibre, training and dedication of our healthcare staff.</li>
          </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              What are the payment modes available at the hospital?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
          <div class="card-body">
            Payments can be done through cash or insurance cover such as NHIF 
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              What is the outpatient process at Nyambene Sub-County Hospital?
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
          <div class="card-body">
             Upon arrival, you are required to proceed to the registration desk where personal information is taken and financial clearance is done. You are then directed by the staff to the next stage.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title">
    <h3>Request
      <span>Appointment</span>
    </h3>
  </div>
  <form name="contact_form" class="default-form contact-form" action="https://formsubmit.co/ndunguk40@gmail.com" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Name" placeholder="Name" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="Email" placeholder="Email" required="">
        </div>
        <div class="form-group">
         	<select class="form-control" name="subject">
			<option>Eye Clinic</option>
			<option>Ent Clinic</option>
            <option>MOPC</option>
            <option>GOPC</option>
            <option>SOPC</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <!--<div class="form-group">
          <select class="form-control" name="subject">
            <option>Doctor</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>-->
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn-style-one">submit now</button>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->







<?php get_footer();?>