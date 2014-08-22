<?php get_header(); ?>

<!-- Main Background Image and Header -->
	<div class="mainbackground">
		<img src="wp-content/themes/theme-hackeryou/assets/images/background.jpg" alt="Main background image">
	</div>
	
	<div class="ribbon">
	    <h1>@by<span>Michael</span>Stone</h1>
	</div>

<!-- Name Ribbon -->
	<div class="devribbon">
		<h1>Web Developer</h1>
	</div>

<!-- About Section -->
	<section class = "aboutsection">
		<div class = "aboutribbon">
			<h1>About</h1>
		</div>

		<div class="writeup">

			<div class="aboutcontent clearfix">
				<img src="wp-content/themes/theme-hackeryou/assets/images/michael.jpg" alt="Michael">
				<h3>About</h3>
				<hr>
				<p>Hello. I am a front-end web developer and writer from Toronto. Hello. I am a front-end web developer and writer from Toronto.Hello. I am a front-end web developer and writer from Toronto.Hello. I am a front-end web developer and writer from Toronto.Hello. I am a front-end web developer and writer from Toronto.Hello. I am a front-end web developer and writer from Toronto.</p>

				<h3>Skills</h3>
				<hr>
				<ul>
					<li>Proficient in HTML5, CSS3, and SASS</li>
					<li>Comfortable working with JavaScript and jQuery</li>
					<li>Built apps using AJAX and various APIs</li>
					<li>Comfortable building fully functional WordPress sites and using the WordPress back-end</li>
					<li>Being a writer also enables me to write excellent content</li>
				</ul>

				</div>
			</div>
	</section>

<!-- Skills Section -->
	<!-- <section class = "skills">
		<div class="aboutribbon">
			<h1>Skills</h1>
		</div>
		

			<div class="skillcontent">

				<div class="box">
					<img src="wp-content/themes/theme-hackeryou/assets/images/html.png" alt="HTML">
					<p>HTML5 and CSS3</p>
				</div>

				<div class="box">
					<img src="wp-content/themes/theme-hackeryou/assets/images/javascript.png" alt="JavaScript">
					<p>JavaScript and jQuery</p>
				</div>

				<div class="box">
					<img src="wp-content/themes/theme-hackeryou/assets/images/wordpress.png" alt="WordPress">
					<p>WordPress</p>
				</div>

				<div class="box">
					<img src="wp-content/themes/theme-hackeryou/assets/images/writer.png" alt="Content Writer">
					<p>Content Writing</p>
				</div>

		
		</div>
	</section> -->

<!-- Portfolio Section -->
	<section class="portfoliosection">
		<div class="aboutribbon">
			<h1>Portfolio</h1>
		</div>

		<div class="portup clearfix">
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
                <img src="<?php echo $image['sizes']['large'] ?>">
            <?php endwhile; ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<h3><?php the_field('short_description'); ?></h3>
			
			<h3><?php the_field('client_name'); ?></h3>
		</section>
	<?php endwhile; ?>
	
	<?php wp_reset_postdata(); ?>

	</div>
</section>
	
<?php else:  ?>
	[stuff that happens if there aren't any posts]
<?php endif; ?>

	<section class = "contact">
		<div class="aboutribbon">
			<h1>Contact</h1>
		</div>
	</section>

<?php get_footer(); ?>