<nav class="top-bar" id="top-bar-menu">
	<section class="row">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>" width="160" /></a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
				<li class="primary-menu hide-for-medium-down" data-hide-for="medium"><?php joints_top_nav(); ?></li>
				<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
				<li><a data-toggle="off-canvas"><?php _e('Menu', 'jointswp'); ?></a></li>
			</ul>
		</div>
	</section>
</nav>
