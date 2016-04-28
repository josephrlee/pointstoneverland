<aside class="off-canvas position-right" id="off-canvas" data-off-canvas data-position="right">
  <!-- Close button -->
  <button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
	<form role="search" method="get" class="search-form input-group" action="<?php echo home_url('/'); ?>">
		<input type="search" class="search-field input-group-field" placeholder="<?php echo esc_attr_x('Search...', 'jointswp') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'jointswp') ?>" />
		<div class="input-group-button">
			<input type="submit" class="search-submit button input-group-field" value="<?php echo esc_attr_x('Search', 'jointswp') ?>" />
		</div>
	</form>
	<?php joints_off_canvas_nav(); ?>

  <?php if (is_active_sidebar('Offcanvas')) : ?>

  <?php dynamic_sidebar('Offcanvas'); ?>

  <?php endif; ?>

</aside>
