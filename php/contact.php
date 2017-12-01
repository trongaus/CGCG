<?php
  /*
  Template Name: Contact
  */
?>

<?php get_header(); ?>

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

      </div>

      <!--<div class="bg-faded p-4 my-4">

        <?php if ( dynamic_sidebar( 'education' ) ); ?>

      </div>-->

    </div>

    <!-- /.container -->

<?php get_footer(); ?>