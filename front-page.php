<?php get_header(); ?>

<!-- Main Background Image and Header -->
	<div class="mainbackground">
		<img src="wp-content/themes/theme-hackeryou/assets/images/background6.jpg" alt="Main background image">
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
				<img src="wp-content/themes/theme-hackeryou/assets/images/michael2.jpg" alt="Michael">
				<h3>About</h3>
			
				<p>Hello! My name is Michael and I am a front-end web developer and designer based in Toronto.
				I love web development because it lives at the intersection of order and creativity. My goal is to focus on both of these factors equally by creating functional technology as well as beautiful design.</p>

				<h3>Human</h3>
			
				<p>Philosophy is the foundation for all of our behaviour. My core philosophical values include honesty, reason, hard work, humour, and respect for others. I implement these values in all aspects of my life, from professional to social, and because of this I can be trusted to build amazing products and solid relationships while (hopefully) having an awesome time doing it.</p>

				<h3>Skills</h3>
				
				<ul>
					<li>Proficient in HTML5, CSS3, and SASS</li>
					<li>Comfortable working with JavaScript and jQuery</li>
					<li>Built apps using AJAX and various APIs</li>
					<li>Comfortable building fully functional WordPress sites and using the WordPress back-end</li>
					<li>A background in writing enables me to produce excellent copy</li>
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
			<h1>Featured Items</h1>
		</div>

		<div class="portup clearfix">

<div class="portfolioList">
      <?php
      $onePageQuery = new WP_Query( 
        array( 
          'posts_per_page' => -1,
          'post_type' => 'portfolio', 
          'orderby' => 'menu_order',
          'order' => 'ASC'
          ) 
      ); ?>
      <?php if ( $onePageQuery->have_posts() ) : ?>
        
      <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

        <div class="portfoliopiece clearfix" id="<?php echo $post->post_name; ?>">


              <div class="portfolioPicture">
                 <?php the_post_thumbnail('small');?>
              </div> <!-- ./portfolioPiecePicture -->

              <a href="<?php the_permalink(); ?>">

              <div class="portfolioPieceContent">
                <h3><?php the_field('item_name') ?> <!-- created for --> <?php the_field('client_name') ?></h3>
                <p><?php the_field('short_description') ?></p>
                <p><?php the_field('long_description') ?></p>
                <?php the_content(); ?>
              </div> <!-- ./portfolioPieceContent  -->
          </a>


        </div> <!-- ./portfoliopiece -->
        <?php endwhile; ?>
        
        <?php wp_reset_postdata(); ?>
        
      <?php endif; ?>
    </div>
	</div>
	<div class="viewmore">
		<a href="http://localhost/personalportfolio/portfolio"><h1>View Full Portfolio</h1></a>
  </div>
</div><!-- ./portfolio -->
	
</section>

	<section class = "contact">
		<div class="aboutribbon">
			<h1>Contact</h1>
		</div>
	</section>
		<div class="contactform">
			<?php echo do_shortcode('[contact-form-7 id="81" title="Front Page Contact Form"]'); ?>
		</div>	

<?php get_footer(); ?>