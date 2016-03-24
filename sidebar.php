<div id="sidebar" class="sidebar large-5 medium-6 columns" role="complementary">

  <?php if (is_active_sidebar('sidebar')) : ?>

  <?php dynamic_sidebar('sidebar'); ?>
  <aside class="top-10">
    <h3>Top 10</h3>
    <?php $id = 9; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>
    <?php if( have_rows('top_10_entry', 9) ): ?>
    <ol class="top-10-list entry-content">
      <?php while( have_rows('top_10_entry', 9) ): the_row();
      // vars
      $title = get_sub_field('title');
      ?>
      <li><?php echo $title; ?></li>
    <?php endwhile; ?>
    </ol>
  <?php endif; ?>
  </aside>

<?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->

  <div class="alert help">
    <p><?php _e('Please activate some Widgets.', 'jointswp');  ?></p>
  </div>

<?php endif; ?>

</div>
