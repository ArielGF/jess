<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'jessicagomez_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function jessicagomez_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'jessicagomez', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );


		// Register nav menu.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'jessicagomez' ),
			'rrss' => __( 'Redes sociales', 'jessicagomez' ),
			'footer' => __( 'Footer', 'jessicagomez' ),
		) );
		


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Adding Thumbnail support
		 */
		add_theme_support( "post-thumbnails" );

		add_image_size( 'zinnias-post-thumbnail', 710, 430, true );


		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'gallery',
			'audio',
			'video'
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jessicagomez_custom_background_args', array(
			'default-color' => 'f8f8f8',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-logo' );

	}
endif; // jessicagomez_theme_setup
add_action( 'after_setup_theme', 'jessicagomez_theme_setup' );


//////////////////////////////////////////////////////////////////
// Enqueue scripts and styles.
//////////////////////////////////////////////////////////////////

function jessicagomez_theme_scripts() {
	// Ariel
	wp_enqueue_style( 'google-font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array
	(), null );
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
}

add_action( 'wp_enqueue_scripts', 'jessicagomez_theme_scripts', 1 );


//////////////////////////////////////////////////////////////////
// Widget register.
//////////////////////////////////////////////////////////////////
function jessicagomez_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jessicagomez' ),
		'id'            => 'jessicagomez-blog-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="c-sidebar__wrapper %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="c-sidebar__title">',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'jessicagomez_widgets_init' );


//////////////////////////////////////////////////////////////////
// Comment
//////////////////////////////////////////////////////////////////

if ( ! function_exists( 'jessicagomez_comment' ) ):

	function jessicagomez_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				// Display trackbacks differently than normal comments.
				?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'jessicagomez' ),
						'<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default :

				global $post;
				?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>" class="comment-body media">
                    <span class="comment-reply">
							<?php comment_reply_link( array_merge( $args, array(
								'reply_text' => __( 'Reply', 'jessicagomez' ),
								'after'      => '',
								'depth'      => $depth,
								'max_depth'  => $args['max_depth']
							) ) ); ?>
						</span>

					<div class="comment-avartar pull-left">
						<?php
						echo get_avatar( $comment, $args['avatar_size'] );
						?>
					</div>
					<div class="comment-context media-body">
						<div class="comment-head">
							<?php
							printf( '<h3 class="comment-author">%1$s</h3>',
								get_comment_author_link() );
							?>
							<span class="comment-date"><?php echo get_comment_date() ?></span>
						</div>

						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'jessicagomez' ); ?></p>
						<?php endif; ?>

						<div class="comment-content">
							<?php comment_text(); ?>
						</div>

						<?php edit_comment_link( __( 'Edit', 'jessicagomez' ), '<span class="edit-link">', '</span>' ); ?>

					</div>

				</div>
				<?php
				break;
		endswitch;
	}

endif;


//////////////////////////////////////////////////////////////////
// Woocommerce support
//////////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'jessicagomez_woocommerce_support' );
function jessicagomez_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


//////////////////////////////////////////////////////////////////
// Include / require files
//////////////////////////////////////////////////////////////////

require_once get_template_directory() . '/inc/template-tags.php';

// Theme Customizer
include( 'inc/customizer/customizer_settings.php' );


//** OCULTAR MIGAS **//

	
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);


