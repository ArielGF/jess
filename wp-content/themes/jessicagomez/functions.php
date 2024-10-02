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
		load_theme_textdomain( 'zinnias_lite', get_template_directory() . '/languages' );

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
			'primary' => __( 'Primary Menu', 'zinnias_lite' ),
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
		add_theme_support( 'custom-background', apply_filters( 'zinnias_lite_custom_background_args', array(
			'default-color' => 'f8f8f8',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-logo' );

	}
endif; // zinnias_lite_theme_setup
add_action( 'after_setup_theme', 'jessicagomez_theme_setup' );


//////////////////////////////////////////////////////////////////
// Enqueue scripts and styles.
//////////////////////////////////////////////////////////////////

function zinnias_lite_theme_scripts() {
	// CSS Files
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null );
	wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/assets/css/slicknav.css', array(), null );
	wp_enqueue_style( 'zinnias-lite-style', get_stylesheet_uri() );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), null );

	// Google Fonts
	wp_enqueue_style( 'google-font-lora', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic', array
	(), null );
	wp_enqueue_style( 'google-font-playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,
    400italic,700,700italic,900,900italic', array(), null );

	wp_enqueue_style('jessicagomez-styles', get_template_directory_uri() . '/css/styles.css');


	// JS Files
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'smoothscroll-js', get_template_directory_uri() . '/assets/js/smoothscroll.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'fitvids-js', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), null, true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'zinnias-lite-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'zinnias_lite_theme_scripts' );


//////////////////////////////////////////////////////////////////
// Widget register.
//////////////////////////////////////////////////////////////////
function zinnias_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'zinnias_lite' ),
		'id'            => 'zinnias-blog-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title text-uppercase text-center">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'zinnias_lite_widgets_init' );


//////////////////////////////////////////////////////////////////
// Comment
//////////////////////////////////////////////////////////////////

if ( ! function_exists( 'zinnias_lite_comment' ) ):

	function zinnias_lite_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				// Display trackbacks differently than normal comments.
				?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p>Pingback: <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'zinnias_lite' ),
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
								'reply_text' => __( 'Reply', 'zinnias_lite' ),
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
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'zinnias_lite' ); ?></p>
						<?php endif; ?>

						<div class="comment-content">
							<?php comment_text(); ?>
						</div>

						<?php edit_comment_link( __( 'Edit', 'zinnias_lite' ), '<span class="edit-link">', '</span>' ); ?>

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

add_action( 'after_setup_theme', 'zinnias_lite_woocommerce_support' );
function zinnias_lite_woocommerce_support() {
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







