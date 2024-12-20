<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */


if ( ! function_exists( 'legacy_book_club_customizer_footer_register' ) ) :
function legacy_book_club_customizer_footer_register( $wp_customize ) {
 	
 	$wp_customize->add_section(
        'legacy_book_club_footer_settings',
        array (
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Footer Settings', 'legacy-book-club' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_footer_settings_title', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_footer_settings_title', 
		array(
		    'label'       => esc_html__( 'Footer Settings', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_footer_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_footer_settings_title',
		) 
	));

	// Copyright text
    $wp_customize->add_setting(
        'legacy_book_club_footer_copyright_text',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'legacy_book_club_sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_footer_copyright_text',
        array(
            'settings'      => 'legacy_book_club_footer_copyright_text',
            'section'       => 'legacy_book_club_footer_settings',
            'type'          => 'textarea',
            'label'         => esc_html__( 'Footer Copyright Text', 'legacy-book-club' )
        )
    );
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_footer_register' );