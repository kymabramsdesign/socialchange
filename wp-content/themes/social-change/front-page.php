<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Social_Change
 */

get_header(); ?>

  <div id="primary" class="content-area front-page">
    <main id="main" class="site-main" role="main">

      <?php if( have_rows('featured_stories') ): ?>

        <?php $i = 1 ?>

        <ul class="links">
          <?php while( have_rows('featured_stories') ): the_row();

            // vars
            $title = get_sub_field('story_title');
            $link = get_sub_field('story_link'); ?>


              <li class="link-<?php echo $i ?>">
                <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
              </li>

            <?php $i++ ?>
          <?php endwhile; ?>
        </ul>

        <?php $i = 1 ?>
        <div class="image-container">
          <?php while( have_rows('featured_stories') ): the_row();

            // vars
            $image = get_sub_field('story_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"" class="image-<?php echo $i ?>" />

            <?php $i++ ?>
          <?php endwhile; ?>
        </div>

    <?php endif; ?>

    <div class="change-agents">
      <h1>Change Agents</h1>
      <div class="subheader"><?php echo get_field('change_agents_subhead') ?></div>

      <div class="article-container">

      <?php if( have_rows('change_agents') ): ?>

        <div class="article-list">
          <?php while( have_rows('change_agents') ): the_row();

            // vars
            $agent = get_sub_field('agent'); ?>

                <div class="item">
                  <a href="<?php the_permalink($agent); ?>">
                    <?php echo get_the_post_thumbnail($agent, 'article-listing'); ?></a>

                  <h5><?php $post_term = get_the_term_list($agent, 'post_tag' );
                    print_r($post_term); ?></h5>
                  <a href="<?php the_permalink($agent); ?>" class="title"><?php echo get_the_title($agent); ?></a>
                  <p><?php $excerpt = wp_trim_words( get_field('article_content', $agent ), $num_words = 18, $more = '...' );
                    echo $excerpt ?></p>
               </div><!-- .item -->
          <?php endwhile; ?>

          </div><!-- .article-list -->

        <?php endif; ?>
        </div><!-- .article-container -->

    </div><!-- .change-agents -->

    <div class="alumni-news">
      <h1>Alumni News</h1>

      <div class="article-container">

      <?php if( have_rows('change_agents') ): ?>

        <div class="article-list">
          <?php while( have_rows('change_agents') ): the_row();

            // vars
            $agent = get_sub_field('agent'); ?>

                <div class="item">
                  <a href="<?php the_permalink($agent); ?>">
                    <?php echo get_the_post_thumbnail($agent, 'article-listing'); ?></a>

                  <h5><?php $post_term = get_the_term_list($agent, 'post_tag' );
                    print_r($post_term); ?></h5>
                  <a href="<?php the_permalink($agent); ?>" class="title"><?php echo get_the_title($agent); ?></a>
                  <p><?php $excerpt = wp_trim_words( get_field('article_content', $agent ), $num_words = 18, $more = '...' );
                    echo $excerpt ?></p>
               </div><!-- .item -->
          <?php endwhile; ?>

          </div><!-- .article-list -->

        <?php endif; ?>
        </div><!-- .article-container -->

    </div><!-- .alumni-news -->


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();



