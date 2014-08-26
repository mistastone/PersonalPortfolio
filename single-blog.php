<?php get_header('portfoliomain'); ?>

<div class="ribbon notfrontpage">
      <span class "notfronth1"><h1><?php the_title(); ?></h1></span>
  </div>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
        
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <h3>Written by <?php the_author(); ?> Stone on <?php the_date(); ?></h3> 

        <?php while( has_sub_field('images') ): ?>
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>">
        <?php endwhile; ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>

    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>

