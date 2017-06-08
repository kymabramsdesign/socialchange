<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Social_Change
 */

?>

	</div><!-- #content -->

  <img src="/wp-content/themes/social-change/img/adler-circle-116.png" alt="Adler circle" class="the-circle" />

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'social-change' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'social-change' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'social-change' ), 'social-change', '<a href="https://automattic.com/" rel="designer">Brandon Trumfio for Kym Abrams Design</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
