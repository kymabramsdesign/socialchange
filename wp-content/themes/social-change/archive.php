<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Social_Change
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1><?php echo the_archive_title('',''); ?></h1>
		<div class="article-container">
			<?php
			/*
			*  Loop through related Post objects
			*/

			if( $posts ): ?>
				<div class="article-list">
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="item">

		          <a href="<?php the_permalink(); ?>">
		          	<?php echo get_the_post_thumbnail($p->ID, 'article-listing'); ?></a>
		          <h5><?php $categories = get_the_category( $p->ID );
		          echo esc_html($categories[0]->name ); ?></h5>
		          	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
		          	<p><?php $excerpt = wp_trim_words( get_field('article_content' ), $num_words = 18, $more = '...' ); echo $excerpt ?></p>
			       </div><!-- item -->
			    <?php endforeach; ?>
				</div><!-- owl-carousel -->
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			</div><!-- .article-content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
