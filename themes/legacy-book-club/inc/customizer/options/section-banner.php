<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */


if ( ! function_exists( 'legacy_book_club_customizer_home_banner_register' ) ) :
function legacy_book_club_customizer_home_banner_register( $wp_customize ) {
 	
 	$wp_customize->add_section(
        'legacy_book_club_home_banner_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Banner Settings', 'legacy-book-club' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_banner_settings_title', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_banner_settings_title', 
		array(
		    'label'       => esc_html__( 'Banner Settings', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_home_banner_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_banner_settings_title',
		) 
	));

    // Button Image
    $wp_customize->add_setting(
        'legacy_book_club_banner_image',
        array(
            'default'           => '',
            'sanitize_callback' => 'legacy_book_club_sanitize_image',

        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'legacy_book_club_banner_image', 
            array(
                'label'           => sprintf( esc_html__( 'Banner Image', 'legacy-book-club' ), ),
                'settings'  => 'legacy_book_club_banner_image',
                'section'   => 'legacy_book_club_home_banner_settings'
            ) 
        )
    );

    // Banner sm-hd
    $wp_customize->add_setting(
        'legacy_book_club_banner_small_head',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_banner_small_head',
        array(
            'label'           => sprintf( esc_html__( 'Banner Small Heading', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_banner_settings',
            'settings'        => 'legacy_book_club_banner_small_head' ,
            'type'            => 'text',
        )
    );

    // Banner Heading
	$wp_customize->add_setting(
        'legacy_book_club_banner_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_banner_heading',
        array(
            'label'           => sprintf( esc_html__( 'Banner Heading', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_banner_settings',
            'settings'        => 'legacy_book_club_banner_heading' ,
            'type'            => 'text',
        )
    );
    
//prod-hd
$wp_customize->add_setting(
        'legacy_book_club_banner_offer_head',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_banner_offer_head',
        array(
            'label'           => sprintf( esc_html__( 'Offer Heading', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_banner_settings',
            'settings'        => 'legacy_book_club_banner_offer_head' ,
            'type'            => 'text',
        )
    );

     $wp_customize->add_setting(
        'legacy_book_club_banner_offer_discount',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_banner_offer_discount',
        array(
            'label'           => sprintf( esc_html__( 'Offer Discount', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_banner_settings',
            'settings'        => 'legacy_book_club_banner_offer_discount' ,
            'type'            => 'text',
        )
    );   
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_home_banner_register' );