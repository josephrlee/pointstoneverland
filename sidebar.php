<div id="sidebar" class="sidebar large-4 columns" role="complementary">
  <?php if (is_active_sidebar('sidebar')) : ?>

  <?php dynamic_sidebar('sidebar'); ?>

  <aside class="top-10 medium-6 large-12 columns">
    <h3>Disney Gift Cards</h3>
    <p><a href="?page_id=3827" title="View All">Here are our favorite ways to save on Disney gift cards.</a></p>
    <?php if( have_rows('disney_gift_card_entry', 3827) ): ?>
    <ol class="disney-gift-cards entry-content">
      <?php while( have_rows('disney_gift_card_entry', 3827) ): the_row();
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
  <aside class="fb-page medium-6 large-12 columns" data-href="https://www.facebook.com/pointstoneverland/" data-small-header="false" data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="true">
    <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pointstoneverland/"><a href="https://www.facebook.com/pointstoneverland/">Points to Neverland</a></blockquote></div>
  </aside>

  <aside class="affiliate-msg medium-6 large-12 columns">
    <p>Support Points to Neverland by using a link from our site to apply for your next credit card.</p>
  </aside>
  <?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->

  <div class="alert help">
    <p><?php _e('Please activate some Widgets.', 'jointswp');  ?></p>
  </div>

<?php endif; ?>
</div>
