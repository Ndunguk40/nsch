<?php get_header();
$hero2 = get_field('hero2');
?>



<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?php bloginfo('template_directory');?>/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1><?php echo $hero2['main_title'];?></h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo $hero2['link'];?>"><?php echo $hero2['link_text'];?> &nbsp;/</a>
                </li>
                <li>Updates</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->

<?php $info = get_field('blog_information');?>



<?php if( have_rows('images') ): ?>  

<section class="blog-section section style-four style-five">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="left-side">
          <div class="item-holder">
   
  <?php while( have_rows('images') ): the_row();

              $image = get_sub_field('image');
              

    ?>    

            <div class="image-box">
              <figure>
                <img loading="lazy" class="img-fluid" src="<?php echo $image['url'];?>" alt="">
              </figure>
            </div>
     
  <?php endwhile; ?>  

            <div class="content-text">

          <p>  <?php echo $info['blog_info'];?></p>     

 </div>
          </div>
        </div>

          <div class="styled-pagination">
  

                  <?php
              global $wp_query;

              $big = 999999999; // need an unlikely integer

              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages

                  ) );
              ?>

        </div> 

     </div>
<?php endif; ?>



			 

   
				
				
			<!--	<div class="text">
                <p>
          
                </p>
					<div class="styled-pagination">
            <ul>

              <li><a href="blog-details.html" class="active">1</a></li>
              <li><a href="blog-details1.html">2</a></li>
              <li><a href="blog-details2.html">3</a></li>

            </ul>
          </div>
              </div>-->

           
      <div class="col-lg-3">
        <div class="right-side">

          <?php if( is_active_sidebar('page-sidebar') ):?>

                <?php dynamic_sidebar('page-sidebar');?>


              <?php endif;?>

  
    


       <!--   <div class="text-title">
            <h6>Search</h6>
          </div>
          <div class="search-box">
            <form method="post" action="index.html">
              <input class="form-control" type="search" name="search" placeholder="Enter to Search" required="">
            </form>
          </div>
          <div class="categorise-menu">
            <div class="text-title">
              <h6>Categories</h6>
            </div>
            <ul class="categorise-list">
              <li><a href="blog-details1.html">Covid 19 <span></span></a></li>
              <li><a href="blog-details.html">Clinical Medicine <span></span></a></li>
              <li><a href="blog-details2.html">Others<span></span></a></li>
            </ul>
          </div>-->
        </div>

      </div>
	  </div>
    </div>
</section>
<!-- End Contact Section -->

<?php get_footer();?>