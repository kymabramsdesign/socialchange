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


    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();



