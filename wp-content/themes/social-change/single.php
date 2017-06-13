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

			<div class="realted-articles">

				<?php
					/*
					*  Loop through related Post objects
					*/

					$posts = get_field('related_articles');

					if( $posts ): ?>
				    <ul>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				       <?php setup_postdata($post); ?>
				       <li>

		            <a href="<?php the_permalink(); ?>">
		            	<?php echo get_the_post_thumbnail($p->ID, 'thumbnail'); ?></a>
		            <h5><?php $categories = get_the_category( $p->ID );
		            echo esc_html($categories[0]->name ); ?></h5>
		            	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				       </li>
				    <?php endforeach; ?>
				    </ul>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div><!-- related-articles -->

		</main><!-- #main -->
	</div><!-- #primary -->




<?php
get_sidebar();
get_footer();
