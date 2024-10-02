<?php

//----------------------------------------------------------------------
//  Posts navigation link. <- Older post  |   Newer Post ->
//----------------------------------------------------------------------

if ( ! function_exists( 'zinnias_lite_posts_navigation' ) ) {

	function zinnias_lite_posts_navigation() {
		?>
		<div class="navigation">

			<?php if ( get_previous_posts_link() ) { ?>
				<div class="next-post pull-left">
					<?php previous_posts_link( __( '<i class="fa fa-angle-double-left"></i> Prev Posts', 'zinnias_lite' ) ); ?>
				</div>
			<?php } ?>

			<?php if ( get_next_posts_link() ) { ?>
				<div class="older-post pull-right">
					<?php next_posts_link( __( 'Next Posts <i class="fa fa-angle-double-right"></i>', 'zinnias_lite' ) ); ?>
				</div>
			<?php } ?>

		</div>
		<?php
	}
}


//----------------------------------------------------------------------
//  Post tag list
//----------------------------------------------------------------------

if ( ! function_exists( 'zinnias_lite_post_tag_list' ) ) {
	function zinnias_lite_post_tag_list() {
		$tags_list = get_the_tag_list( '', ' ' );
		if ( $tags_list ) {
			printf( '<div class="tags pull-left"><span class="tags-links">' . '%1$s' . '</span></div>', $tags_list );
		}

	}
}


//----------------------------------------------------------------------
//  Image Caption
//----------------------------------------------------------------------
function zinnias_lite_the_caption() {
	$get_description = get_post( get_post_thumbnail_id() )->post_excerpt;
	if ( ! empty( $get_description ) ) {//If description is not empty show the div
		echo '<div class="img-caption">' . $get_description . '</div>';
	}
}


//----------------------------------------------------------------------
// Archive title
//----------------------------------------------------------------------

if ( ! function_exists( 'zinnias_lite_archive_title' ) ) :

	function zinnias_lite_archive_title( $before = '', $after = '' ) {
		if ( is_category() ) {
			$title = sprintf( __( 'Categoría de <span class="archive-name">%s</span>', 'zinnias_lite' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( __( 'Etiquetado como <span class="archive-name">%s</span>', 'zinnias_lite' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( __( 'Autor  <span class="archive-name">%s</span>', 'zinnias_lite' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( __( 'Filtrado por año <span class="archive-name">%s</span>', 'zinnias_lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'zinnias_lite' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( __( 'Filtrado por mes <span class="archive-name">%s</span>', 'zinnias_lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'zinnias_lite' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( __( 'Filtrado por día <span class="archive-name">%s</span>', 'zinnias_lite' ), get_the_date( _x( 'F j, Y', 'daily
                archives date format', 'zinnias_lite' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = _x( 'Asides', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = _x( 'Galleries', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = _x( 'Images', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = _x( 'Videos', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = _x( 'Quotes', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = _x( 'Links', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = _x( 'Statuses', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = _x( 'Audio', 'post format archive title', 'zinnias_lite' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = _x( 'Chats', 'post format archive title', 'zinnias_lite' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( __( 'Browse Archives by <span class="archive-name">%s</span>', 'zinnias_lite' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( __( '%1$s: %2$s', 'zinnias_lite' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} else {
			$title = __( 'Archives', 'zinnias_lite' );
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