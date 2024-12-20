<?php
/**
 * Custom template hooks for this theme.
 *
 * @package Legacy Book Club
 */


/**
 * Before title meta hook
 */
if ( ! function_exists( 'legacy_book_club_before_title' ) ) :
function legacy_book_club_before_title() {
	do_action('legacy_book_club_before_title');
}
endif;


/**
 * Before title content hook
 */
if ( ! function_exists( 'legacy_book_club_before_title_content' ) ) :
	function legacy_book_club_before_title_content() {
		do_action('legacy_book_club_before_title_content');
	}
endif;


/**
 * After title content hook
 */
if ( ! function_exists( 'legacy_book_club_after_title_content' ) ) :
	function legacy_book_club_after_title_content() {
		do_action('legacy_book_club_after_title_content');
	}
endif;


/**
 * After title meta hook
 */
if ( ! function_exists( 'legacy_book_club_after_title' ) ) :
function legacy_book_club_after_title() {
	do_action('legacy_book_club_after_title');
}
endif;

/**
 * Single post content after meta hook
 */
if ( ! function_exists( 'legacy_book_club_single_post_after_content' ) ) :
	function legacy_book_club_single_post_after_content($postID) {
		do_action('legacy_book_club_single_post_after_content',$postID);
	}
endif;