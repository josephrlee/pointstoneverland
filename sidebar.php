<div id="sidebar" class="sidebar large-5 columns" role="complementary">
  <?php if (is_active_sidebar('sidebar')) : ?>

  <?php dynamic_sidebar('sidebar'); ?>

  <div class="fb-page" data-href="https://www.facebook.com/pointstoneverland/" data-small-header="true" data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pointstoneverland/"><a href="https://www.facebook.com/pointstoneverland/">Points to Neverland</a></blockquote></div></div>

  <aside class="top-10 medium-6 large-12 columns">
    <h3>Top 10</h3>
    <p>Our favorite uses of credit card points at Disney World or Disneyland.</p>
    <?php if( have_rows('top_10_entry', 9) ): ?>
    <ol class="top-10-list entry-content">
      <?php while( have_rows('top_10_entry', 9) ): the_row();
      // vars
      $title = get_sub_field('title');
      $url = get_sub_field('post_url');
      ?>

      <?php if( !empty( $url ) ): ?>
          <li><a href="<?php echo $url?>"><?php echo $title; ?></a></li>
      <?php else: ?>
        <li><?php echo $title; ?></li>
      <?php endif; ?>
    <?php endwhile; ?>
    </ol>
    <p class="info"><a href="?page_id=9" title="View All" class="button">Learn More</a></p>
  <?php endif; ?>
  </aside>

  <?php if( have_rows('credit_card_entry', 11) ): ?>
  <aside class="featured-card medium-6 large-12 columns">
      <?php while( have_rows('credit_card_entry', 11) ): the_row();
      // vars
      $featured_card = get_sub_field('featured_card');
      $card_name = get_sub_field('card_name');
      $image = get_sub_field('card_image');
      $url = get_sub_field('post_link');
      ?>
      <?php if($featured_card==1): ?>
        <h3>Featured Card</h3>
        <p><a href="<?php echo $url; ?>" title="Learn More"><img src="<?php echo $image['url']; ?>" alt="<<?php echo $image['alt'] ?>" /></a></p>
      <?php endif; ?>
    <?php endwhile; ?>
  </aside>
  <?php endif; ?>

  <?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->

  <div class="alert help">
    <p><?php _e('Please activate some Widgets.', 'jointswp');  ?></p>
  </div>

<?php endif; ?>
</div>
