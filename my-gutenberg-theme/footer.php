<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'simone_credits' ); ?>
			
			<?php
			printf(
				/* translators: %s = text link: mor10.com, URL: http://mor10.com/ */
				__( 'My Gutenberg Theme by %s', 'Kelvin Loney' ),
				'<a href="https://github.com/kelvinloney" rel="designer nofollow">' . esc_html__( 'Kelvin Loney', 'simone' ) . '</a>'
			);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
