<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="c-header">
		<div class="o-container">
				<div class="c-header__wrapper">
					<div class="c-header__logo">
						<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ): ?>
							<?php the_custom_logo(); ?>
						<?php else: ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo - Jessica Gómez" />
							</a>
						<?php endif; ?>
					</div>

					<?php wp_nav_menu( array(
						'container'      => 'div',
						'theme_location' => 'primary',
						'menu_class'     => 'c-header__menu',
						'menu_id'		 => 'category-menu'
					) ); ?>
					<div class="mobile-cat-menu"></div>
					
				</div>
				
		</div>
	</header>


