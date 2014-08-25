<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
   
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
    <h2><?php the_title(); ?></h2>
    <?php if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} ?>
  <?php the_content(); ?>
    <h3> <?php $author = get_the_author(); ?></h3>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>