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

	<footer id="colophon" class="site-footer" role="contentinfo">
  <img src="/wp-content/themes/social-change/img/adler-circle-2.png" alt="Adler circle" class="the-circle" />
		<div class="site-info">
			<div class="copy footer-item"><a href="http://www.adler.edu/" target="_blank">ADLER UNIVERSITY <?php echo date("Y"); ?></a></div>
      <div class="site-subtitle footer-item">A Magazine for Alumni and Friends of Adler University</div>
      <div class="social footer-item">
        <a href="https://www.facebook.com/AdlerUniversity/" target="_blank"><img src="/wp-content/themes/social-change/img/facebook.png" alt="Facebook" /></a>
        <a href="https://twitter.com/adleruniversity" target="_blank"><img src="/wp-content/themes/social-change/img/twitter.png" alt="Twitter" /></a>
        <a href="https://www.instagram.com/adleruniversity/" target="_blank"><img src="/wp-content/themes/social-change/img/pinterest.png" alt="Pinterest" /></a>
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Load Custom JS file -->
<script src="/wp-content/themes/social-change/js/owl.carousel.min.js"></script>
<script src="/wp-content/themes/social-change/js/custom.js"></script>

</body>
</html>
