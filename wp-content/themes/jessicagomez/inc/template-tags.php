<?php

//----------------------------------------------------------------------
//  Posts navigation link. <- Older post  |   Newer Post ->
//----------------------------------------------------------------------

if ( ! function_exists( 'jessicagomez_posts_navigation' ) ) {

	function jessicagomez_posts_navigation() {
		?>
		<div class="c-navigation">

			<?php if ( get_previous_posts_link() ) { ?>
				<div class="c-navigation__prev">
					<?php previous_posts_link( __( '<i class="fa fa-angle-double-left"></i> Anterior', 'jessicagomez' ) ); ?>
				</div>
			<?php } ?>

			<?php if ( get_next_posts_link() ) { ?>
				<div class="c-navigation__next">
					<?php next_posts_link( __( 'Siguiente <i class="fa fa-angle-double-right"></i>', 'jessicagomez' ) ); ?>
				</div>
			<?php } ?>

		</div>
		<?php
	}
}


//----------------------------------------------------------------------
//  Post tag list
//----------------------------------------------------------------------

if ( ! function_exists( 'jessicagomez_post_tag_list' ) ) {
	function jessicagomez_post_tag_list() {
		$tags_list = get_the_tag_list( '', ' ' );
		if ( $tags_list ) {
			printf( '<div class="c-tags"><div class="c-tags__wrapper">' . '%1$s' . '</div></div>', $tags_list );
		}

	}
}


//----------------------------------------------------------------------
//  Image Caption
//----------------------------------------------------------------------
function jessicagomez_the_caption() {
	$get_description = get_post( get_post_thumbnail_id() )->post_excerpt;
	if ( ! empty( $get_description ) ) {//If description is not empty show the div
		echo '<div class="img-caption">' . $get_description . '</div>';
	}
}


//----------------------------------------------------------------------
// Archive title
//----------------------------------------------------------------------

if ( ! function_exists( 'jessicagomez_archive_title' ) ) :

	function jessicagomez_archive_title( $before = '', $after = '' ) {
		if ( is_category() ) {
			$title = sprintf( __( '<span class="archive-name">%s</span>', 'jessicagomez' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( __( 'Etiquetado como <span class="archive-name">%s</span>', 'jessicagomez' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( __( 'Autor  <span class="archive-name">%s</span>', 'jessicagomez' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( __( 'Filtrado por año <span class="archive-name">%s</span>', 'jessicagomez' ), get_the_date( _x( 'Y', 'yearly archives date format', 'jessicagomez' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( __( 'Filtrado por mes <span class="archive-name">%s</span>', 'jessicagomez' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'jessicagomez' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( __( 'Filtrado por día <span class="archive-name">%s</span>', 'jessicagomez' ), get_the_date( _x( 'F j, Y', 'daily
                archives date format', 'jessicagomez' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = _x( 'Asides', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = _x( 'Galleries', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = _x( 'Images', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = _x( 'Videos', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = _x( 'Quotes', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = _x( 'Links', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = _x( 'Statuses', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = _x( 'Audio', 'post format archive title', 'jessicagomez' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = _x( 'Chats', 'post format archive title', 'jessicagomez' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( __( 'Browse Archives by <span class="archive-name">%s</span>', 'jessicagomez' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( __( '%1$s: %2$s', 'jessicagomez' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} else {
			$title = __( 'Archives', 'jessicagomez' );
		}

		/**
		 * Filter the archive title.
		 *
		 * @param string $title Archive title to be displayed.
		 */
		$title = apply_filters( 'get_the_archive_title', $title );

		if ( ! empty( $title ) ) {
			echo $before . $title . $after;
		}
	}
endif;