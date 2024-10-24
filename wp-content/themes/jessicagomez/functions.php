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
			'destacados' => __( 'Artículos destacados', 'jessicagomez' ),
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

		add_image_size( 'jessicagomez-post-thumbnail', 710, 430, true );


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
// Post Types.
//////////////////////////////////////////////////////////////////

// #region LIBROS
function post_type_libros() {
    // Etiquetas para el Custom Post Type
    $labels = array(
        'name'               => _x('Libros', 'post type general name', 'text_domain'),
        'singular_name'      => _x('Libro', 'post type singular name', 'text_domain'),
        'menu_name'          => _x('Libros', 'admin menu', 'text_domain'),
        'name_admin_bar'     => _x('Libro', 'add new on admin bar', 'text_domain'),
        'add_new'            => _x('Añadir Nuevo', 'libro', 'text_domain'),
        'add_new_item'       => __('Añadir Nuevo Libro', 'text_domain'),
        'new_item'           => __('Nuevo Libro', 'text_domain'),
        'edit_item'          => __('Editar Libro', 'text_domain'),
        'view_item'          => __('Ver Libro', 'text_domain'),
        'all_items'          => __('Todos los libros', 'text_domain'),
        'search_items'       => __('Buscar libros', 'text_domain'),
        'parent_item_colon'  => __('Libros Padre:', 'text_domain'),
        'not_found'          => __('No se encontraron libros.', 'text_domain'),
        'not_found_in_trash' => __('No se encontraron libros en la papelera.', 'text_domain'),
    );

    // Argumentos para el Custom Post Type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'libros'), // Cambia el slug según sea necesario
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'menu_icon'          => 'dashicons-book', 
    );

    // Registra el Custom Post Type
    register_post_type('libros', $args);
}

// Hook para registrar el Custom Post Type
add_action('init', 'post_type_libros');
// #endregion LIBROS

/* #region COLABORACIONES */
function post_type_colabs() {
    // Etiquetas para el Custom Post Type
    $labels = array(
        'name'               => _x('Colaboraciones', 'post type general name', 'text_domain'),
        'singular_name'      => _x('Colaboración', 'post type singular name', 'text_domain'),
        'menu_name'          => _x('Colaboraciones', 'admin menu', 'text_domain'),
        'name_admin_bar'     => _x('Colaboración', 'add new on admin bar', 'text_domain'),
        'add_new'            => _x('Añadir nueva', 'colaboración', 'text_domain'),
        'add_new_item'       => __('Añadir nueva colaboración', 'text_domain'),
        'new_item'           => __('Nueva colaboración', 'text_domain'),
        'edit_item'          => __('Editar colaboración', 'text_domain'),
        'view_item'          => __('Ver colaboración', 'text_domain'),
        'all_items'          => __('Todas las colaboraciones', 'text_domain'),
        'search_items'       => __('Buscar colaboraciones', 'text_domain'),
        'parent_item_colon'  => __('Colaboraciones Madre:', 'text_domain'),
        'not_found'          => __('No se encontraron colaboraciones.', 'text_domain'),
        'not_found_in_trash' => __('No se encontraron colaboraciones en la papelera.', 'text_domain'),
    );

    // Argumentos para el Custom Post Type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'colaboraciones'), // Cambia el slug según sea necesario
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
		'menu_icon'          => 'dashicons-groups', 
    );

    // Registra el Custom Post Type
    register_post_type('colaboraciones', $args);
}

// Hook para registrar el Custom Post Type
add_action('init', 'post_type_colabs');
/* #endregion COLABORACIONES */


//////////////////////////////////////////////////////////////////
// Metaboxes
//////////////////////////////////////////////////////////////////

// #region CAMPOS PARA COLABORACIONES
add_action('add_meta_boxes', 'metabox_colaboraciones');
function metabox_colaboraciones() {
    add_meta_box(
        'colabs_propiedades_meta_box',          // ID del metabox
        __('Propiedades', 'text_domain'),       // Título del metabox
        'colabs_propiedades_meta_box_callback', // Callback para mostrar el contenido
        'colaboraciones',                       // Post type donde aparecerá
        'normal',                               // Contexto
        'high'                                  // Prioridad
    );
}

function colabs_propiedades_meta_box_callback($post) {
    $selected_option = get_post_meta($post->ID, '_colabs_type', true);
    $valor_colaboracion = get_post_meta($post->ID, '_colaboracion_ext-link', true);

    $options = array('evento', 'programa', 'podcast', 'libro', 'revista', 'noticias', 'blog', 'web');

    wp_nonce_field('colabs_propiedades_meta_box_nonce', 'colabs_propiedades_meta_box_nonce'); ?>

	<p><label for="colabs_type"><?php _e('Selecciona un tipo:', 'text_domain'); ?></label>
	<br>
        <select name="colabs_type" id="colabs_type">
            <option value=""><?php _e('Seleccione una opción', 'text_domain'); ?></option>
            <?php foreach ($options as $option): ?>
                <option value="<?php echo esc_attr($option); ?>" <?php selected($selected_option, $option); ?>>
                    <?php echo esc_html(ucfirst($option)); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </p>

    <p>
        <label for="colaboracion_text"><?php _e('Link externo:', 'text_domain'); ?></label>
        <input type="text" id="colaboracion_text" name="colaboracion_text" value="<?php echo esc_attr($valor_colaboracion); ?>" style="width:100%;" />
    </p>
    <?php
}

add_action('save_post', 'colabs_save_propiedades_meta_box_data');
function colabs_save_propiedades_meta_box_data($post_id) {
    if (!isset($_POST['colabs_propiedades_meta_box_nonce']) || !wp_verify_nonce($_POST['colabs_propiedades_meta_box_nonce'], 'colabs_propiedades_meta_box_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['colabs_type'])) {
        update_post_meta($post_id, '_colabs_type', sanitize_text_field($_POST['colabs_type']));
    } else {
        delete_post_meta($post_id, '_colabs_type');
    }

    if (isset($_POST['colaboracion_text'])) {
        update_post_meta($post_id, '_colaboracion_ext-link', sanitize_text_field($_POST['colaboracion_text']));
    } else {
        delete_post_meta($post_id, '_colaboracion_ext-link');
    }
}

// #endregion CAMPOS PARA COLABORACIONES
//////////////////////////////////////////////////////////////////
// Widget register.
//////////////////////////////////////////////////////////////////
function jessicagomez_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jessicagomez' ),
		'id'            => 'jessicagomez-blog-sidebar',
		'description'   => 'Aparecerá a la derecha del contenido de los posts',
		'class'			=> 'c-sidebar',
		'before_widget' => '<aside id="%1$s" class="c-sidebar__wrapper %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="c-sidebar__title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar(array(
        'name'          => __('Bloques Home', 'text_domain'),
        'id'            => 'home-blocks',
        'description'   => __('Bloques que se mostrarán en la página Home', 'text_domain'),
        'before_widget' => '<div class="c-home-blocks %2$s">',
        'after_widget'  => '</div>',
    ));

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


