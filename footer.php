					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="medium-8 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. This site is not affiliated with The Walt Disney Company in any way.</p>
	    				</div>
							<div class="medium-4 columns">
								<nav role="navigation">
									<?php joints_social_links(); ?>
                  <?php joints_footer_links(); ?>
								</nav>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
