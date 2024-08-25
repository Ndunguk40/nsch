
<?php
/*Template Name:Schedule*/
get_header();
?>

<?php $hero0 = get_field('hero0');?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php bloginfo('template_directory');?>/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $hero0['main_title'];?></h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo $hero0['link'];?>"><?php echo $hero0['link_text'];?>/</a>
                </li>
                <li>Clinic/Inpatient Visiting Schedule</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->




<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      <div class="col-lg-6 col-md-6 working-time item">
        <i class="fa fa-clock"></i>
        <h2>Our inpatient visiting hours:</h2>
						<p><strong>MONDAY TO SUNDAY</strong></p>
					<ul class="w-hours">			
						<li><strong>Morning</strong>: 6am to 8am</li>
						<li><strong>Afternoon</strong>: 1pm to 2pm</li>
						<li><strong>Evening</strong>: 4.30pm to 5.30pm</li>
					</ul>
      </div>

      <div class="col-lg-6 col-md-6 working-time item">
        <i class="fa fa-calendar"></i>
        <h2>CLINIC SCHEDULE</h2>
		 				 <p><strong>All ClINICS START AT 8:00am & END AT 12:00pm </strong></p>
					<ul class="w-hours">
					  <li>Medical Out-Patient Clinic -<strong style="float:right;">MON,TUE,WED,THUR</strong></li>
					  <li>Paediatric Out-Patient Clinic -<strong style="float:right;">TUE</strong></li>
					  <li>Gynaecology Out-Patient Clinic-<strong style="float:right;">MON, THUR</strong></li>
					  <li>Surgical Out-Patient Clinic -<strong style="float:right;">FRI</strong></li>
					  <li>Eye Clinic -<strong style="float:right;">MON, WED, FRI</strong></li>
					  <li>Dermatology Clinic -<strong style="float:right;">THUR</strong></li>
					  <li>Ear,Nose & Throat Clinic-<strong style="float:right;">MON, WED, FRI</strong></li>
					 </ul>
      </div>

    </div>
  </div>
</section>





<?php get_footer();?>