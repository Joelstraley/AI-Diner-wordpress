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
					hope you're hungry <span class="inner-span">...for art.</span>
				</p>
				<h2 class="intro-title"></h2>
			</div>
		</div>

		<div class="food-title" id="food">menu</div>

		<div class="food-grid">
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

	</main><!-- #main -->

<?php
get_footer();
