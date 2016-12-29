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

          <?php if (have_rows('top_10_entry')): ?>
            <?php $ctr = 1; ?>
            <?php while (have_rows('top_10_entry')): the_row();
            // vars
            $title = get_sub_field('title');
            $what_it_takes = get_sub_field('what_it_takes');
            $value = get_sub_field('value');
            $image = get_sub_field('image');
            $url = get_sub_field('post_url');
            ?>
            <div class="callout">
              <section class="top-10-list row">
                <figure class="column medium-6 large-5 full">
                  <figcaption><?php echo $ctr; ?></figcaption>
                  <?php if ($image): ?><img class="size-medium" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/><?php endif; ?>
                </figure>
                <main class="column medium-6 large-7">
                  <?php if ($title): ?><h3><?php echo $title; ?></h3><?php endif; ?>
                  <?php if ($what_it_takes): ?><p><strong>How It Works:</strong> <?php echo $what_it_takes; ?></p><?php endif; ?>
                  <?php if ($savings): ?><p><strong>Savings:</strong> $<?php echo $value; ?></p><?php endif; ?>
                  <?php if ($url): ?><p><a href="<?php echo $url; ?>" title="Read More" class="button">Read More</a></p><?php endif; ?>
                </main>
              </section>
            </div>
            <?php ++$ctr; ?>
            <?php endwhile; ?>
          <?php endif; ?>

        </article> <!-- end article -->

      <?php endwhile; endif; ?>

    </main> <!-- end #main -->

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
