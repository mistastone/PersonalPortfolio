<?php get_header('portfoliomain'); ?>

<div class="ribbon notfrontpage">
      <span class "notfronth1"><h1>Blog</h1></span>
  </div>

<div class="section">
  <div class="innerWrapper">
    <div class="left">
      <?php if ( have_posts() ) the_post(); ?>


      <!-- <h3>Written by <?php $author = the_author(); ?> Stone on <?php the_date(); ?></h3>

   <!--  <h1>
        <?php if ( is_day() ) : ?>
          <?php printf( __( 'Daily Archives: %s', 'twentyten' ), the_date() ); ?>
        <?php elseif ( is_month() ) : ?>
          <?php printf( __( 'Monthly Archives: %s', 'twentyten' ), the_date('F Y') ); ?>
        <?php elseif ( is_year() ) : ?>
          <?php printf( __( 'Yearly Archives: %s', 'twentyten' ), the_date('Y') ); ?>
        <?php else : ?>
          <?php _e( 'Blog Archives', 'twentyten' ); ?>
        <?php endif; ?>
      </h1>  -->


      <?php
      
  /* Since we called the_post() above, we need to
   * rewind the loop back to the beginning that way
   * we can run the loop properly, in full.
   */
  rewind_posts();

  /* Run the loop for the archives page to output the posts.
   * If you want to overload this in a child theme then include a file
   * called loop-archives.php and that will be used instead.
   */
  get_template_part( 'loop', 'blog' );

  ?>



    </div><!--/left-->	
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>