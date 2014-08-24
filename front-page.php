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
				<h3>Developer</h3>
			
				<p>Hello! My name is Michael and I am a front-end web developer based in Toronto.
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

<!-- Contact Section and Form -->

	<section class = "contact">

		<div class="aboutribbon">
			<h1>Contact</h1>
		</div>


		<div class="contactform">
			<?php echo do_shortcode('[contact-form-7 id="81" title="Front Page Contact Form"]'); ?>
		</div>
	

	</section>

		<div class="address">
			<h3>Address</h3>
			<p>Currently I am using the HackerYou (The Lab) office space in Toronto for work and meetings. You can find me there most days.</p><br>
			<p>483 Queen Street West, 3rd Floor<br>Toronto, ON<br>M5V 2A9</p>

			<div class="socialicons">
				<a href="https://twitter.com/bymichaelstone"><i class="fa fa-twitter-square fa-4x"></i></a>
				<a href="https://www.facebook.com/mstone85"><i class="fa fa-facebook-square fa-4x"></i></a>
				<a href="https://github.com/mistastone"><i class="fa fa-github-square fa-4x"></i></a>
				<a href="https://www.linkedin.com/in/michaelhstone"><i class="fa fa-linkedin-square fa-4x"></i></a>
				<a href="mailto:michael.stone2@gmail.com?Subject=Hello" target="_top"><i class="fa fa-envelope-square fa-4x"></i></a>
			</div>
		</div>





		
	
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2887.036545084868!2d-79.39772800000001!3d43.647408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34dc87fa67bd%3A0xe05376a9e49647e1!2s483+Queen+St+W%2C+Toronto%2C+ON+M5V+2A9%2C+Canada!5e0!3m2!1sen!2sus!4v1408851992099" width="300" height="300" frameborder="0" style="border:0"></iframe> -->


<?php get_footer(); ?>