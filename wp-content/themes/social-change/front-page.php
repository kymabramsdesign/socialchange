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

    <div class="main-title">
      <h1 class="issue-title"><?php echo get_field(issue_title); ?></h1>
      <p class="issue-date"><?php echo get_field(issue_date); ?></p>
      <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
          <source src="wp-content/uploads/2017/06/istock.mp4" type="video/mp4">
        </video>
      </div>
    </div>

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
        <div class="hide-desktop grey-overlay"></div>

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
                    <?php echo get_the_post_thumbnail($agent, 'change-circles'); ?></a>

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

      <?php if( have_rows('alumni_news') ): ?>

        <div class="article-list">
          <?php while( have_rows('alumni_news') ): the_row();

            // vars
            $alumni = get_sub_field('alumni'); ?>

              <div class="item">
                <a href="<?php the_permalink($alumni); ?>">
                  <?php echo get_the_post_thumbnail($alumni, 'article-listing'); ?></a>

                <h5><?php $post_term = get_the_term_list($alumni, 'post_tag' );
                  print_r($post_term); ?></h5>
                <a href="<?php the_permalink($alumni); ?>" class="title"><?php echo get_the_title($alumni); ?></a>
                <p><?php $excerpt = wp_trim_words( get_field('article_content', $alumni ), $num_words = 18, $more = '...' );
                  echo $excerpt ?></p>
             </div><!-- .item -->
            <?php endwhile; ?>

          </div><!-- .article-list -->

        <?php endif; ?>
      </div><!-- .article-container -->

    </div><!-- .alumni-news -->

    <div class="institutes-centers">
      <h1>Institutes + Centers</h1>

      <div class="article-container">

      <?php if( have_rows('institutes') ): ?>

        <div class="article-list">
          <?php while( have_rows('institutes') ): the_row();

            // vars
            $institute = get_sub_field('institute_stories'); ?>

              <div class="item">
                <a href="<?php the_permalink($institute_stories); ?>">
                  <?php echo get_the_post_thumbnail($institute, 'change-circles'); ?></a>

                <h5><?php $post_term = get_the_term_list($institute, 'post_tag' );
                  print_r($post_term); ?></h5>
                <a href="<?php the_permalink($institute); ?>" class="title"><?php echo get_the_title($institute); ?></a>
                <p><?php $excerpt = wp_trim_words( get_field('article_content', $institute ), $num_words = 18, $more = '...' );
                  echo $excerpt ?></p>
             </div><!-- .item -->
            <?php endwhile; ?>

          </div><!-- .article-list -->

        <?php endif; ?>
      </div><!-- .article-container -->

    </div><!-- .institutes-centers -->

    <div class="taking-action">
      <h1>Taking Action</h1>

      <div class="article-container">

      <?php if( have_rows('taking_action') ): ?>

        <div class="article-list">
          <?php while( have_rows('taking_action') ): the_row();

            // vars
            $action = get_sub_field('action_stories'); ?>

              <div class="item">
                <a href="<?php the_permalink($action); ?>">
                  <?php echo get_the_post_thumbnail($action, 'article-listing'); ?></a>

                <h5><?php $post_term = get_the_term_list($action, 'post_tag' );
                  print_r($post_term); ?></h5>
                <a href="<?php the_permalink($action); ?>" class="title"><?php echo get_the_title($action); ?></a>
                <p><?php $excerpt = wp_trim_words( get_field('article_content', $action ), $num_words = 18, $more = '...' );
                  echo $excerpt ?></p>
             </div><!-- .item -->
            <?php endwhile; ?>

          </div><!-- .article-list -->

        <?php endif; ?>
      </div><!-- .article-container -->

    </div><!-- .taking-actio -->

    <div id="field-notes" class="field-notes">
      <h1>Read More on Adler.edu</h1>

      <div class="related-comment">
        <div class="toggle-buttons">
          <div class="blog-button active">Blog</div>
          <div class="news-button">Adler News</div>
          <div class="media-button">In the Media</div>
        </div>
      </div>

      <div class="blog">

        <div class="field-notes-container">
          <?php while( have_rows('blog') ): the_row();

            // vars
            $title = get_sub_field('story_title');
            $subhead = get_sub_field('story_subhead');
            $link = get_sub_field('story_link');
            $image = get_sub_field('story_image'); ?>

              <a href="<?php echo $link; ?>" target="_blank">
                <div class="field-notes-item">
                  <p><span class="notes-title"><?php echo $title; ?></span><br />
                  <span class="hide-mobile"><?php echo $subhead; ?></span></p>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"" class="field-notes-image" />
                </div><!-- .field-notes-item -->
              </a>

          <?php endwhile; ?>
        </div><!-- .field-notes-container -->
      </div><!-- .blog -->

      <div class="news">

        <div class="field-notes-container">
          <?php while( have_rows('adler_news') ): the_row();

            // vars
            $title = get_sub_field('story_title');
            $subhead = get_sub_field('story_subhead');
            $link = get_sub_field('story_link');
            $image = get_sub_field('story_image'); ?>

              <a href="<?php echo $link; ?>" target="_blank">
                <div class="field-notes-item">
                  <p><span class="notes-title"><?php echo $title; ?></span><br />
                  <span class="hide-mobile"><?php echo $subhead; ?></span></p>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"" class="field-notes-image" />
                </div><!-- .field-notes-item -->
              </a>

          <?php endwhile; ?>
        </div><!-- .field-notes-container -->
      </div><!-- .news -->

      <div class="media">

        <div class="field-notes-container">
          <?php while( have_rows('media') ): the_row();

            // vars
            $title = get_sub_field('story_title');
            $subhead = get_sub_field('story_subhead');
            $link = get_sub_field('story_link');
            $image = get_sub_field('story_image'); ?>

              <a href="<?php echo $link; ?>" target="_blank">
                <div class="field-notes-item">
                  <p><span class="notes-title"><?php echo $title; ?></span><br />
                  <span class="hide-mobile"><?php echo $subhead; ?></span></p>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"" class="field-notes-image" />
                </div><!-- .field-notes-item -->
              </a>

          <?php endwhile; ?>
        </div><!-- .field-notes-container -->
      </div><!-- .media -->

    </div><!-- .field-notes -->


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();



