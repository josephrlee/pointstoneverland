<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">

    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; $c = 0;?>

    <?php the_post(); ++$c; ?>
    <?php if (!$paged && $c == 1) :?>
    <!-- Index Page -->
    <section id="posts-slider" class="large-12 columns">
      <?php get_template_part('parts/loop', 'slider'); ?>
    </section>

    <main id="main" class="large-8 columns" role="main">

      <?php while (have_posts()) : the_post(); ?>
      <!-- To see additional archive styles, visit the /parts directory -->
      <?php get_template_part('parts/loop', 'archive'); ?>

      <?php endwhile; ?>

      <?php joints_page_navi(); ?>

    </main>
    <?php endif; //end of if (!$paged && $c==1 ) ?>

    <?php ++$c; if ($paged != 1 && $c != 1) :?>
    <!-- Secondary pages -->
    <main id="main" class="large-8 columns" role="main">

      <?php while (have_posts()) : the_post(); ?>
      <!-- To see additional archive styles, visit the /parts directory -->
      <?php get_template_part('parts/loop', 'archive'); ?>

      <?php endwhile; ?>

      <?php joints_page_navi(); ?>

    </main>
    <!-- end #main -->
    <?php endif;?>

    <?php endif; //end of have_posts() ?>

    <?php get_sidebar(); ?>

  </div>
  <!-- end #inner-content -->

</div>

<?php get_footer(); ?>
