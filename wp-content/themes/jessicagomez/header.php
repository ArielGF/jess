<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_enqueue_script('header-js', get_template_directory_uri() . '/components/header/header.js'); ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="c-header<?php if(is_front_page()) echo '--front-page'?>">
		<div id="js-menu-hamburguer" class="c-header__menu-hamburger">
			<svg class="c-header__hamburger-open" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
			<svg class="c-header__hamburger-close" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#FFFFFF" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
		</div>
		<div class="o-container">
				<div class="c-header__wrapper">
					<div class="c-header__logo">
						<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ): ?>
							<?php the_custom_logo(); ?>
						<?php else: ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo<?php if(!is_front_page()) echo '-white'?>.svg" alt="Logo - Jessica Gómez" />
							</a>
						<?php endif; ?>
					</div>

					<?php wp_nav_menu( array(
						'container'      => 'none',
						'theme_location' => 'primary',
						'menu_class'     => 'c-header__menu',
						'menu_id'		 => 'category-menu'
					) ); ?>
					<div class="mobile-cat-menu"></div>
					
				</div>
				
		</div>
	</header>


