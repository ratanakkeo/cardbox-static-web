<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function legacy_book_club_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'Woocommerce', 'legacy-book-club' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),

		array(
			'name'             => __( 'TI WooCommerce Wishlist', 'legacy-book-club' ),
			'slug'             => 'ti-woocommerce-wishlist',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'legacy_book_club_register_recommended_plugins' );