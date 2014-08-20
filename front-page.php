<?php get_header(); ?>

	<div class="mainbackground">
		<img src="wp-content/themes/theme-hackeryou/assets/images/background.jpg" alt="Main background image">
		<div class="ribbon">
	      <h1>@by<span>Michael</span>Stone</h1>
	  </div>
	</div>
	
	<div class="devribbon">
		<h1>Web Developer</h1>
	</div>


<div class="portfoliosection">
	<h1>Portfolio</h1>

<?php

$onePageQuery = new WP_Query( 
	array( 
		'posts_per_page' => -1,
		'post_type' => 'portfolio', 
		'orderby' => 'menu_order',
		'order' => 'ASC',
		) 
); ?>

<?php if ( $onePageQuery->have_posts() ) : ?>

	<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

		<section id="<?php echo $post->post_name; ?>">
		<?php while( has_sub_field('images') ): ?>
            
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['sizes']['medium'] ?>">
            <?php endwhile; ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<h3><?php the_field('short_description'); ?></h3>
			
			<h3><?php the_field('client_name'); ?></h3>
		</section>
	<?php endwhile; ?>
	
	<?php wp_reset_postdata(); ?>


</div>
	
<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>


<?php get_footer(); ?>