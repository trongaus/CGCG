<?php
  /*
  Template Name: Home
  */
?>

<?php get_header(); ?>

<div class="container">
	 <div class="bg-faded p-4 my-4">
	   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="http://carolinebraun.com/images/slide-1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h3 class="text-shadow">First Slide</h3>
                <p class="text-shadow">This is the caption for the first slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="http://carolinebraun.com/images/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h3 class="text-shadow">Second Slide</h3>
                <p class="text-shadow">This is the caption for the second slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="http://carolinebraun.com/images/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h3 class="text-shadow">Third Slide</h3>
                <p class="text-shadow">This is the caption for the third slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="http://carolinebraun.com/images/slide-4.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h3 class="text-shadow">Fourth Slide</h3>
                <p class="text-shadow">This is the caption for the fourth slide.</p> -->
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="http://carolinebraun.com/images/slide-5.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h3 class="text-shadow">Fifth Slide</h3>
                <p class="text-shadow">This is the caption for the fifth slide.</p> -->
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
	</div>
</div>


    <div class="container">
      <div class="bg-faded p-4 my-4">
        <?php
          $args = array(
            'post_type'   => 'post',
            'category_name' => 'featured'
          );
          $the_query = new WP_Query( $args);
        ?>

          <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?>
        </div>

		<!-- 
		
      <div class="bg-faded p-4 my-4">

        <?php if ( dynamic_sidebar( 'front-top' ) ); ?>

      </div>

      <div class="bg-faded p-4 my-4">
      
        <?php if ( dynamic_sidebar( 'front-bottom' ) ); ?>

      </div>

	-->

    </div>

    <!-- /.container -->

<?php get_footer(); ?>
  

