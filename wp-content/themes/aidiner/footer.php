<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aidiner
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-copyright">
				&copy; <?php echo date("Y"); ?> the ai dinner. No Rights Reserved. Because its AI,baby!
				<div class="footer-social">
					<a href="https://joel-straley-portfolio.netlify.app/" class="social-link">
						portfolio
					</a>
					<a href="https://www.linkedin.com/in/joelstraley/" class="social-link">
						linkedin
						<!-- <img src="https://www.pinclipart.com/picdir/middle/7-75873_50th-anniversary-clip-art.png" alt=""> -->
					</a>
					<a href="https://github.com/joelstraley" class="social-link">
						github
						<!-- <img src="https://w7.pngwing.com/pngs/914/758/png-transparent-github-social-media-computer-icons-logo-android-github-logo-computer-wallpaper-banner-thumbnail.png" alt=""> -->
					</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
