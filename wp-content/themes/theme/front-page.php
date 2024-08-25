
<?php get_header();?>

<?php $hero = get_field('hero');?>

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">

  <!-- Slider Item -->
  <div class="slider-item slide1" style="background-image:url(<?php bloginfo('template_directory');?>/images/slider/slider-bg-1.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content style text-center">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft"><?php echo $hero['title_left'];?></h2>
			<h2 class="text-white text-bold mb-2" data-animation-in="slideInRight"><?php echo $hero['title_right'];?></h2>
            <a href="<?php echo $hero['link1'];?>" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2"><?php echo $hero['link_text1'];?></a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>

  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(<?php bloginfo('template_directory');?>/images/slider/slider-bg-2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start-->
          <div class="content style text-center">
            <h2 class="text-white" data-animation-in="slideInRight">We Care About Your Health</h2>
            
            <a href="<?php echo $hero['link2'];?>" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2"><?php echo $hero['link_text2'];?></a>
          </div>
          <!-- Slide Content End-->
        </div>
      </div>
    </div>
  </div>
  
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(<?php bloginfo('template_directory');?>/images/slider/slider-bg-3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content text-center style">
           
           <!-- <p class="tag-text mb-4" data-animation-in="slideInLeft"><br></p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">EXPLORE</a>-->
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
</div>

<!--====  End of Page Slider  ====-->


<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      <div class="col-lg-4 col-md-6 emmergency item">
        <i class="fa fa-phone"></i>
        <h2>Emegency Cases</h2>
        <a href="tel:+254704320847">+254704320847</a>
		  <p>Need assistance?<br>
		  Do not hesitate to call us, our Emergency Team is always ready to help.</p>
      </div>
      <div class="col-lg-4 col-md-6 top-doctor item">
        <i class="fa fa-stethoscope"></i>
         <center><h2>24 Hour Service</h2>
       <p>Always Open 24/7</p>
        <a href="<?php echo $hero['link3'];?>" class="btn btn-main"><?php echo $hero['link_text3'];?></a></center>
      </div>
      <div class="col-lg-4 col-md-6 top-doctor item" style="background: #6fcbd1">
        <i class="fa fa-calendar"></i>
       <center><h2>SPECIAL CLINIC/INPATIENT VISITING SCHEDULE</h2>
		  <p></p>
        <a href="<?php echo $hero['link5'];?>" class="btn btn-main"><?php echo $hero['link_text3'];?></a></center>
      </div>
    </div>
  </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Why Choose <span>Us</span></h3>
						<p class="mb-0">  <br> </p>
					</div>

					<div class="row">
						<div class="col-sm-6">
						  <div class="item">
						    <div class="icon-box">
									<figure>
										<a href="services.html"><img loading="lazy" src="<?php bloginfo('template_directory');?>/images/resource/1.png" alt="features image"></a>
									</figure>
							  </div>
								<h3 class="mb-2">PATIENT ORIENTED&nbsp;</h3>
							  <p>Everyone has a life to live it's our priority to get you back to it as soon as possible.&nbsp; </p>
							</div>
						</div>
						<div class="col-sm-6">
						  <div class="item">
						    <div class="icon-box">
									<figure>
										<a href="services.html">
										<img loading="lazy" src="<?php bloginfo('template_directory');?>/images/resource/2.png" alt="features image">
										</a>
									</figure>
							  </div>
							<h3 class="mb-2">multidisciplinary &nbsp;</h3>
							  <p>Offering a range of departments and services. Whatever needs you have, we offer the best care.</p>
							</div>
						</div>
						<div class="col-sm-6">
						  <div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="<?php bloginfo('template_directory');?>/images/resource/3.png" alt="features image">
										</a>
									</figure>
								</div>
							<h3 class="mb-2">sophisticated equipments</h3>
							  <p>Through our state of the art medical equipments, we make diagnosis and treatment efficient.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="<?php bloginfo('template_directory');?>/images/resource/4.png" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">AFFORDABLE HEALTHCARE</h3>
								<p>We make affordable, high quality and general healthcare services accessible to all patients irrespective of economic status .</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Nav tabs -->
          <div class="tabs mb-5">
            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dormitory-tab" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory" aria-selected="true">Core Values</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="orthopedic-tab" data-toggle="tab" href="#orthopedic" role="tab" aria-controls="orthopedic" aria-selected="false">Our Mission</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="sonogram-tab" data-toggle="tab" href="#sonogram" role="tab" aria-controls="sonogram" aria-selected="false">Our Vision</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="x-ray-tab" data-toggle="tab" href="#x-ray" role="tab" aria-controls="x-ray" aria-selected="false">Our Goal</a>
              </li>
            </ul>
          </div>



          <!--Start single tab content-->

          <div class="tab-content" id="aboutTab">
            <div class="service-box tab-pane fade show active" id="dormitory">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/services/service-six.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Core 
                        <span> Values</span>
                    </h3>
                    </div>
                    
                    <ul class="content-list" font size="+1">
                      <li>
                        <i class="far fa-dot-circle"></i>PROFESSIONALISM</li>
                      <li>
                        <i class="far fa-dot-circle"></i>TIMELINESS</li>
                      <li>
                        <i class="far fa-dot-circle"></i>QUALITY</li>
						 <li>
                        <i class="far fa-dot-circle"></i>INTEGRITY</li>
						 <li>
                        <i class="far fa-dot-circle"></i>TEAMWORK</li>
						 <li>
                        <i class="far fa-dot-circle"></i>HONESTY</li>
						 <li>
                        <i class="far fa-dot-circle"></i>INNOVATIVENESS</li>
                    </ul>
                    <a href="<?php echo $hero['link2'];?>" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>

            <!--End single tab content-->



            <!--Start single tab content-->

            <div class="service-box tab-pane fade" id="orthopedic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/services/service-six.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Our 
                        <span>Mission</span>
                    </h3>
                    </div>
                    <div class="text">
                      <p><font size="+1">TO PROMOTE AND PARTICIPATE IN THE PROVISION OF INTERGRATED AND HIGH QUALITY CURATIVE AND REHABILITATIVE SERVICES TO MERU COUNTY AND  ALL KENYANS</font></p>
                    </div>
                    
                    <a href="<?php echo $hero['link2'];?>" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>

            <!--End single tab content-->

            
            <!--Start single tab content-->

            <div class="service-box tab-pane fade" id="sonogram">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/services/service-six.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Our 
                        <span>Vision</span>
                    </h3>
                    </div>
                    <div class="text">
                      <p><font size="+1">TO HAVE AN EFFICIENT AND COST EFFECTIVE MEDICAL CARE SYSTEM FOR A HEALTHY NATION</font></p>
                      
                    </div>
                    <a href="<?php echo $hero['link2'];?>" class="btn btn-style-one"><?php echo $hero['link_text3'];?></a>
                  </div>
                </div>
              </div>
            </div>
            
            <!--End single tab content-->
            

            <!--Start single tab content-->
            
            <div class="service-box tab-pane fade" id="x-ray">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?php bloginfo('template_directory');?>/images/services/service-six.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Our 
                        <span>Goal</span>
                    </h3>
                    </div>
                    <div class="text">
                      <p><font size="+1">TO CONTRIBUTE TOWARDS THE REDUCTION OF HEALTH INEQUALITIES AND TO IMPROVE THE HEALTH IMPACT AND OUTCOME INDICATORS</font></p>
                    </div>
                    <a href="<?php echo $hero['link2'];?>" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!--End single tab content-->
            

            <!--Start single tab content-->
            <!--End single tab content-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--End about us area-->



<!--Service Section-->

<?php if( have_rows('provided_services') ): ?>  

<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Provided
        <span>Services</span>
      </h3>

    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
  <?php while( have_rows('provided_services') ): the_row();

              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $link = get_sub_field('link');

    ?>    
      

          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="<?php echo $hero['link3'];?>">
                  <img loading="lazy" src="<?php echo $image['url'];?>" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <a href="<?php echo $hero['link3'];?>">
                  <h6><?php echo $title;?></h6>
                </a>
                <p></p>
              </div>
            </div>
          </div>


  
  <?php endwhile; ?>  

        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>

<!--End Service Section-->





<!--team section-->

<?php if( have_rows('our_team') ): ?>  

<section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Our
        <span>Team</span>
      </h3>
    </div>

  <div class="row">
  
  <?php while( have_rows('our_team') ): the_row();

              $image = get_sub_field('image');
              $name = get_sub_field('name');
              $title = get_sub_field('title');

    ?>    
      
<div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="<?php echo $image['url'];?>" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4><?php echo $name;?></h4>
             <p><?php echo $title;?></p>
        </div>
      </div>
  </div>

  
  <?php endwhile; ?>  

</div><!-- end row -->

    </div>
  </div>
</section>
<?php endif; ?>

<!--End team section-->






<!--latest updates-section-->


<?php if( have_rows('latest_updates') ): ?>  

<section class="testimonial-section" style="background: url(<?php bloginfo('template_directory');?>/images/testimonials/1.jpg);">
  <div class="container">
    
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>
            <span>Latest Updates&nbsp;</span>
          </h3>
        </div>
      </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="items-container">
  <?php while( have_rows('latest_updates') ): the_row();

              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $author_date = get_sub_field('author_date');
              $description = get_sub_field('description');
              $link = get_sub_field('link');
              $link_text = get_sub_field('link_text');
    ?>    
      
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="<?php echo $link;?>">
                  <img loading="lazy" src="<?php echo $image['url'];?>" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
          <h6><?php echo $title;?></h6>
                <a href="<?php echo $link;?>">
                  <span><?php echo $author_date;?></span>
                </a>
                <p><?php echo $description;?></p>
          <a href="<?php echo $link;?>" class="btn btn-main"><?php echo $link_text;?></a>
              </div>
            </div>
          </div>

  
  <?php endwhile; ?>  

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<!--End latest updates-section-->
		   

<!--our partners-->

  <div class="container">
    <div class="section-title text-center">
      <h3>Our
        <span>Partners</span>
      </h3>
</div>
<?php echo do_shortcode( '[logo-showcase id="889" title="partners"]' ); ?>

  </div>

<!--
  <div class="container">
  <h4><strong><span style="color: #007FFE">We Accept:</span></h4>
   <section class="customer-logos slider">
      <div class="slide"><img src="<?php bloginfo('template_directory');?>/images/partners/1.jpg"></div>
      <div class="slide"><img src="<?php bloginfo('template_directory');?>/images/partners/4.png"></div>
   </section>
 </div>
-->
		   




<?php get_footer();?>