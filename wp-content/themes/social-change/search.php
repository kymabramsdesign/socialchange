<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Social_Change
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1 class="archives"><?php printf( esc_html__( 'Search Results for: %s', 'social-change' ), '<span class="search-header">' . get_search_query() . '</span>' ); ?></h1>

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
		          <h5><?php echo get_the_tag_list( $post_id ); ?></h5>
		          	<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
		          	<p><?php $excerpt = wp_trim_words( get_field('article_content' ), $num_words = 18, $more = '...' ); echo $excerpt ?></p>
			       </div><!-- item -->
			    <?php endforeach; ?>
				</div><!-- owl-carousel -->
				<?php
				wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

			else :
				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div><!-- .article-content -->

		<?php the_posts_pagination(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

