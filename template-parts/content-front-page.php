<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unevenearth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class((has_post_thumbnail() ? 'has-thumbnail' : 'no-thumbnail')); ?>>
  <header class="entry-header">

    <?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();
    endif;
    ?>
    <?php echo('<a href="'.esc_url(get_permalink()).'">'); ?>
    <div class="entry-info">

      <?php unevenearth_find_matching_categories(); ?>

      <?php
        the_title( '<h2 class="entry-title">', '</h2>' ).
        the_subtitle( '<h3 class="entry-subtitle">', '</h3>');

      if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
        <?php unevenearth_posted_on(); ?>
      </div><!-- .entry-meta -->
      <?php
      endif; ?>

    </div>
  </a>
  </header><!-- .entry-header -->

  <footer class="entry-footer">
    <!-- <?php unevenearth_entry_footer(); ?> -->
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
