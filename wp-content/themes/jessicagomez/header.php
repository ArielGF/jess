<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<?php wp_enqueue_style('main', get_template_directory_uri() . '/components/header/header.css');?>
	<?php wp_enqueue_style('header', get_template_directory_uri() . '/css/main.css');?>
</head>
<body <?php body_class(); ?>>
	<div clas="c-header">
		<div class="o-container">
			<div class="c-header__wrapper">
				<div class="c-header__logo">
					<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ): ?>
						<div class="text-center main-logo">
							<?php the_custom_logo(); ?>
						</div><!-- /Logo -->
					<?php else: ?>
						<div class="main-logo text-logo text-center">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>

							<p><?php echo esc_textarea( get_bloginfo( 'description' ) ); ?></p>
						</div><!-- /Logo -->
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
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="zinnias-main-wrap">
				header

				<!-- header section start -->
				<header class="header">

					<!-- main-logo section start-->
					<div class="main-logo-section">

					<!-- #region LOGO -->
						<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ): ?>
							<div class="text-center main-logo">
								<?php the_custom_logo(); ?>
							</div><!-- /Logo -->
						<?php else: ?>
							<div class="main-logo text-logo text-center">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>

								<p><?php echo esc_textarea( get_bloginfo( 'description' ) ); ?></p>
							</div><!-- /Logo -->
						<?php endif; ?>
						<!-- #endregion LOGO -->
					</div>
					<!-- main-logo section end-->

					<!-- primary menu start -->
					<div id="category-menu">
						<div class="category-menu">
							<?php wp_nav_menu( array(
								'container'      => false,
								'theme_location' => 'primary',
								'menu_class'     => 'cat-menu'
							) ); ?>
						</div>
						<div class="mobile-cat-menu"></div>
					</div>
					<!-- primary menu end -->
				</header>
				<!-- header section end -->


