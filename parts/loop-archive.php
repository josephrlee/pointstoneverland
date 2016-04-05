<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
  <header class="article-header">
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  </header> <!-- end article header -->
  <section class="entry-content" itemprop="articleBody">
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
    <p><?php echo first_paragraph_excerpt(); ?></p>
    <p><a href="<?php the_permalink() ?>" title="Continue Reading Post ?>" class="excerpt-read-more button">Read More</a></p>
  </section> <!-- end article section -->
</article> <!-- end article -->
