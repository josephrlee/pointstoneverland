<?php
/*
Template Name: Hotel Maps
*/
?>

<?php get_header(); ?>

<div id="content">

  <div id="inner-content" class="row">

    <main id="main" class="large-12 medium-12 columns" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

          <header class="article-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </header> <!-- end article header -->

          <section class="entry-content" itemprop="articleBody">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
          </section> <!-- end article section -->


          <?php if( have_rows('hotel_map_entry') ): ?>
            <?php while( have_rows('hotel_map_entry') ): the_row();
            // vars
            $title = get_sub_field('map_title');
            $map = get_sub_field('map_embed_code');

            ?>
            <h2><?php echo $title ?></h2>
            <div class="flex-video"><iframe src="<?php echo $map ?>" width="640" height="480"></iframe></div>
          <?php endwhile; ?>
          <?php endif; ?>

        </article> <!-- end article -->

      <?php endwhile; endif; ?>

    </main> <!-- end #main -->

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
