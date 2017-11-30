<?php get_header(); ?>

    <div class="container">

      
      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <?php
          $args = array(
            'post_type'   => 'post',
            'category_name' => 'featured'
          );
          $the_query = new WP_Query( $args);
        ?>





        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php if (have_posts() ) : while ( $the_query-> have_posts() ) : $the_query->the_post(); ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ($the_query->current_post== 0 ):?>active<?php endif; ?>"></li>
            <?php endwhile; endif; ?>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-4.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-5.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?>
        </div>

      </div>

      <div class="bg-faded p-4 my-4">

        <?php if ( dynamic_sidebar( 'front-top' ) ); ?>

      </div>

      <div class="bg-faded p-4 my-4">
      
        <?php if ( dynamic_sidebar( 'front-bottom' ) ); ?>

      </div>

    </div>

    <!-- /.container -->

<?php get_footer(); ?>
  

