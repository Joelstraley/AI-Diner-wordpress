<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aidiner
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="hero">
			<div class="hero-inner container">
				<h1 class="hero-text">
					Welcome to The AI Diner
				</h1>
				<p class="hero-description">
					this is what <span class="dall-e">DALL-E</span> thinks food looks like
				<p>
			</div>
		</div>

		<div class="intro">
			<div class="intro-inner">
				<h2 class="intro-title"></h2>
				<p class="intro-description">
					hope you're hungry <span class="inner-span">...for art</span>
				</p>
				<h2 class="intro-title"></h2>
			</div>
		</div>

		<div class="section-heading" id="food">menu</div>

		<div class="grid">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		 </div>
		<div class="section-heading" id="locations">
			Directions to The AI Diner
		</div>
		<div class="locations">
			<div class="location grid">
				<div class="map">
					<div class="map-inner">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2360.2205277443713!2d-122.41676787784353!3d37.76288736524326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e3aef063141%3A0xcd8d4b8ec7bc4d0c!2sOpenAI!5e0!3m2!1sen!2sus!4v1694290196217!5m2!1sen!2sus" 
						width="600" height="450" style="border:0;" 
						allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
					</iframe>

					</div>
				</div>

				<div class="location-info">
					<div class="location-description">
						<h3>Address</h3>
						<p>3180 18th St, San Francisco, CA 94110</p>
						<h3>Email</h3>
						<p>theAIdiner@openai.com</p>
						<h3>Directions</h3>
						<p>just go ask chatGPT</p>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->



<?php
get_footer();
