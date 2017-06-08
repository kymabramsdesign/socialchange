<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Social_Change
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="article-headings">
			<h5><?php echo get_the_tag_list( $post_id ); ?></h5>
			<h1><?php echo get_the_title( $post_id ); ?></h1>
			<?php if( $subhead = get_field('post_subheader') ){ ?>
				<h2><?php the_field('post_subheader'); ?></h2>
			<?php } ?>
			<p class="date-posted"><?php echo get_the_date( 'F j, Y' ); ?></p>
		</div>

		<div class="header-image" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
		</div>

		<div class="article-content">
			<?php the_field('article_content'); ?>
		</div>

		<?php
		while ( have_posts() ) : the_post();

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<p>Look at me</p>

<?php
get_sidebar();
get_footer();
