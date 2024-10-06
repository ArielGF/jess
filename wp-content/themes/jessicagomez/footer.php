<div class="c-footer">
	<div class="o-container">
		<div class="c-footer__wrapper">
			<div class="c-footer__title">Jessica Gómez</div>

			<?php wp_nav_menu( array(
				'container'      => 'none',
				'theme_location' => 'footer',
				'menu_class'     => 'c-footer__links',
			) ); ?>

			<div class="c-footer__rrss">
				<?php	
					$menu = get_nav_menu_locations()['rrss'];
					if ($menu) {
						foreach (wp_get_nav_menu_items($menu) as $item) {
							if (strpos($item->title, 'icono') === 0) {
								$svg_path = get_template_directory() . '/assets/images/rrss/' . strtolower(substr($item->title, 5)) . '.svg';
								echo '<a href="' . esc_url($item->url) . '" target="_blank" rel="noopener noreferrer" class="c-footer__rrss-item">';
								echo file_exists($svg_path) ? file_get_contents($svg_path) : '';
								echo '</a>';
							}
						}
					}
				?>
			</div>
			<hr>
			<div class="c-footer__copyright">
				<?php echo get_theme_mod( 'copy_right_text' ); ?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>