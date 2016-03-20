<?php
/*
Template Name: Top 10
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


          <?php if( have_rows('top_10_entry') ): ?>

            <ol class="top-10-list entry-content">
              <?php while( have_rows('top_10_entry') ): the_row();
              // vars
              $title = get_sub_field('title');
              $what_it_takes = get_sub_field('what_it_takes');
              $value = get_sub_field('value');
              $image = get_sub_field('image');
              ?>
              <li>
                <h4><?php echo $title; ?> <?php if( $image ): ?><img class="size-medium alignright" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" width="400"/><?php endif; ?></h4>
                <p><strong>What it takes</strong>: <?php echo $what_it_takes; ?></p>
                <p><strong>Value</strong>: $<?php echo $value; ?></p>
              </li>
            <?php endwhile; ?>
          </ol>
        <?php endif; ?>


        <footer class="article-footer">

        </footer> <!-- end article footer -->

        <?php comments_template(); ?>

      </article> <!-- end article -->

    <?php endwhile; endif; ?>

  </main> <!-- end #main -->

</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
