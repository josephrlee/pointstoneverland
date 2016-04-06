<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">

    <section id="posts-slider" class="large-12 columns">
      <?php get_template_part( 'parts/loop', 'slider' ); ?>
    </section>

    <main id="main" class="large-7 columns" role="main">
      <?php query_posts('posts_per_page=6&offset=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- To see additional archive styles, visit the /parts directory -->
        <?php get_template_part( 'parts/loop', 'archive' ); ?>

      <?php endwhile; ?>

      <?php joints_page_navi(); ?>

      <?php else : ?>
        <?php get_template_part( 'parts/content', 'missing' ); ?>
      <?php endif; ?>

    </main> <!-- end #main -->

    <?php get_sidebar(); ?>

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
