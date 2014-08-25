<?php get_header(); ?>

<div class="ribbon notfrontpage">
      <span class "notfronth1"><h1>Full Portfolio</h1></span>
  </div>


<div class="section">
  <div class="innerWrapper">
    <div class="left">

      

      <?php

$onePageQuery = new WP_Query( 
  array( 
    'posts_per_page' => -1,
    'post_type' => 'portfolio', 
    'orderby' => 'menu_order',
    'order' => 'ASC',
    ) 
); ?>

<section class="archiveportfolio">

  <?php if ( $onePageQuery->have_posts() ) : ?>

    <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

  <div class="archivepiece">

      <a href="<?php the_permalink(); ?>">
      <section id="<?php echo $post->post_name; ?>">
        <h2><?php the_title(); ?></h2>
        <!-- < ?php the_content(); ? > -->
        <p><?php the_field('long_description') ?></p>
        <?php while( has_sub_field('images') ): ?>
      
          <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['sizes']['large'] ?>">
    
      <?php endwhile; ?>


        <!-- <h3><?php the_field('short_description'); ?></h3> -->
        
        <!-- <h3><?php the_field('client_name'); ?></h3> -->
      </section>
    <?php endwhile; ?>
    </a>
    
    <?php wp_reset_postdata(); ?>

    </div>


</section>
  
<?php else:  ?>
  [stuff that happens if there aren't any posts]
<?php endif; ?>



    </div><!--/left-->	
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>