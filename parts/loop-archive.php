<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
  <header class="article-header">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  </header> <!-- end article header -->
  <section class="entry-content" itemprop="articleBody">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
    <p><?php echo excerpt(40); ?></p>
    <p><a href="<?php the_permalink() ?>" title="Read More>" class="excerpt-read-more button">Continue Reading Post &raquo;</a></p>
  </section> <!-- end article section -->
</article> <!-- end article -->
