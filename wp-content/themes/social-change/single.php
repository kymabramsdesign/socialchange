<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

	<div class="scrolled-header">
		<div class="left-item scrolly">
			<?php echo previous_post('%', $link = 'PREVIOUS STORY', 'PREVIOUS STORY', TRUE) ?>
		</div><!-- .left-item -->

		<div class="center-item scrolly">
			<h4><?php echo get_the_title( $post_id ); ?>
				<?php if( $subhead = get_field('post_subheader') ){ ?>
					<span class="grey"><?php the_field('post_subheader'); ?></span>
				<?php } ?>
			</h4>
		</div><!-- .center-item -->

		<div class="right-item scrolly">
			<?php echo next_post('%', $link = 'NEXT STORY', 'NEXT STORY', TRUE ) ?>
		</div><!-- .right-item -->

		<div class="preview previous-image" style="position:absolute;">
			<?php
			$prevPost = get_previous_post();
			$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(252,252) );?>
			<?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", FALSE); ?>
		</div><!-- .previous-image -->

		<div class="preview next-image" style="position:absolute;">
			<?php $nextPost = get_next_post();
			$nextThumbnail = get_the_post_thumbnail( $nextPost->ID, array(252,252) );
			echo next_post_link( '%link',"$nextThumbnail  <p>%title</p>", FALSE ); ?>
		</div><!-- .next-image -->

	</div><!-- .scrolled-header -->


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

			<?php
				$caption = get_field('image_caption');
				if ( !empty($caption) ): ?>
				<p class="caption"><?php echo $caption ?></p>
				<?php endif; ?>

			<?php if( has_category('presidents-letter', $post_id) ) { ?>
				<div class="video-page-overlay">
					<img class="close-button" src="/wp-content/themes/social-change/img/exit.png" alt="close button" />
				</div>
				<div class="play-button"></div>
				<div class="video-container">
					<video id="video" width="1244" height="700" controls>
						<source src="<?php the_field('link'); ?>" type="video/mp4">
					We're sorry, your browser does not support the playback of this video.
					</video>
				</div>
		<?php	} ?>

			<div class="article-content">
				<?php the_field('article_content'); ?>
			</div>
			<div class="navigation"><p><?php posts_nav_link(); ?></p></div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="related-comment">
		<div class="toggle-buttons">
			<div class="related-news active">Related News</div>
			<div class="comments-button">Comments</div>
		</div>


			<?php
				while ( have_posts() ) : the_post();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			<div class="related-articles">
			<?php
			/*
			*  Loop through related Post objects
			*/

			$posts = get_field('related_articles');

			if( $posts ): ?>
				<div class="owl-carousel related">
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
						<div class="item">

		          <a href="<?php the_permalink(); ?>">
		          	<?php echo get_the_post_thumbnail($p->ID, 'thumbnail'); ?></a>
		          <h5><?php $categories = get_the_category( $p->ID );
		          echo esc_html($categories[0]->name ); ?></h5>
		          	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

			       </div><!-- item -->
			    <?php endforeach; ?>
				</div><!-- owl-carousel -->
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			</div><!-- related-articles -->
	</div><!-- related-comment -->




<?php
get_sidebar();
get_footer();
