<?php
/*Template Name:OpenTenders*/
get_header();
$hero3 = get_field('hero3');
?>



<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php bloginfo('template_directory');?>/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $hero3['main_title'];?></h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo $hero3['link'];?>"><?php echo $hero3['link_text'];?> &nbsp;/</a>
                </li>
                <li>Open Tenders</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- Contact Section -->

      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Open
            <span>Tenders</span>
          </h3>
          <p><br></p>
        </div>
      </div>

<?php if( have_rows('documents') ): ?>

<section class="blog-section section style-four style-five">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="left-side">
          <div class="item-holder">
            <div class="content-text">
                <ul>              
    <?php while( have_rows('documents') ): the_row();
        
             $file = get_sub_field('upload_a_file');
             $filename = $file['filename'];
             $fileurl = $file['url'];


    ?> 
        <li class="far fa-dot-circle"> <a href="<?php echo $fileurl;?>">download <?php echo $filename;?></a></li>



      <?php endwhile; ?> 



      			</ul>
			 </div>
          </div>
        </div>
     </div>
<?php endif; ?>		



	  </div>
    </div>
</section>
<!-- End Contact Section -->


<?php get_footer();?>