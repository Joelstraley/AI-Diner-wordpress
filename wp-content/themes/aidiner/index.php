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
					Welcome to <span>The AI Diner</span>
				</h1>
				<p class="hero-description">
					this is what <span class="dall-e">DALL-E</span> thinks food looks like
				<p>
				<h2 class="hero-slogan">Home of the Famous
						<?php
						query_posts('posts_per_page=1&category_name=menu&orderby=rand');
						?>
						<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?> 
				    <span class="hero-slogan--menu-item">
						<?php the_title() ?>
					<span>

				</h2>
					<?php 
						endwhile;
						endif;
					?>
			</div>
		</div>

		<!-- Here we query for our custom post type 'intro' and get that single post -->
		<?php
		query_posts('posts_per_page=1&post_type=intro');
		?>
		<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?> 
			<div class="intro">
				<div class="intro-inner" id="desc">
					<h2 class="intro-title"></h2>
					<div class="intro-description">
						<?php the_title(); ?>
						<?php the_content(); ?>
					</div>
					<h2 class="intro-title"></h2>
				</div>
			</div>
			<?php 
				endwhile;
				endif;
			?>

		<div class="section-heading" id="menu">
			<?php get_category_description('category_name=menu'); ?>
		</div>

		<div class="grid">
			<?php
			query_posts('posts_per_page=20&category_name=menu');
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
		<div class="section-heading" id="directions">
		<?php get_category_description('post_type=Location'); ?>
		</div>
		<div class="locations">
		<!-- Here we query for our custom post type 'locations' -->
		<?php
		query_posts('post_type=location');
		?>
		<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?> 
			<div class="location grid">
				<div class="map">
					<div class="map-inner">
						<?php if( get_field('map') ); ?>
						<?php the_field('map'); ?>
					</div>
				</div>

				<div class="location-info">
					<div class="location-description">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>

	</main><!-- #main -->



<?php
get_footer();
