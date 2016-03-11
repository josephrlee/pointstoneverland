<?php get_header(); ?>

	<div id="content">

		<?php echo do_shortcode('[recent_post_slider limit="4" design="design-1" show_author="false" show_category_name="true" show_content="true" show_date="true" dots="true" arrows="true" autoplay="true" autoplay_interval="5000" speed="1000" content_words_limit="20"]

'); ?>

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
