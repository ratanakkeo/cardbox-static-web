<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */


if ( ! function_exists( 'legacy_book_club_customizer_header_register' ) ) :
function legacy_book_club_customizer_header_register( $wp_customize ) {

    $wp_customize->add_section(
        'legacy_book_club_home_header_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Header Settings', 'legacy-book-club' )
        )
    );

    // topbar buttons

    // Title label
    $wp_customize->add_setting( 
        'legacy_book_club_label_header_settings_title', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_header_settings_title', 
        array(
            'label'       => esc_html__( 'Tobar Buttons', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_home_header_settings',
            'type'        => 'legacy-book-club-title',
            'settings'    => 'legacy_book_club_label_header_settings_title',
        ) 
    ));

    $wp_customize->add_setting(
        'legacy_book_club_topbar_register_button_link',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_topbar_register_button_link',
        array(
            'label'           => sprintf( esc_html__( 'Topbar Register Button Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_topbar_register_button_link' ,
            'type'            => 'url',
        )
    );

    $wp_customize->add_setting(
        'legacy_book_club_topbar_login_button_link',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_topbar_login_button_link',
        array(
            'label'           => sprintf( esc_html__( 'Login Button Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_topbar_login_button_link' ,
            'type'            => 'url',
        )
    );
    
    // Title label
    $wp_customize->add_setting( 
        'legacy_book_club_label_social_meida_settings_title', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_social_meida_settings_title', 
        array(
            'label'       => esc_html__( 'Social Media Links', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_home_header_settings',
            'type'        => 'legacy-book-club-title',
            'settings'    => 'legacy_book_club_label_social_meida_settings_title',
        ) 
    ));

    // Facebook Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media1_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media1_heading',
        array(
            'label'           => sprintf( esc_html__( 'Facebook Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media1_heading' ,
            'type'            => 'url',
        )
    );

    // Instagram Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media2_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media2_heading',
        array(
            'label'           => sprintf( esc_html__( 'Instagram Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media2_heading' ,
            'type'            => 'url',
        )
    );

    // Twitter Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media3_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media3_heading',
        array(
            'label'           => sprintf( esc_html__( 'Twitter Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media3_heading' ,
            'type'            => 'url',
        )
    );

    // Youtube Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media4_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media4_heading',
        array(
            'label'           => sprintf( esc_html__( 'Youtube Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media4_heading' ,
            'type'            => 'url',
        )
    );

    // Pinterest Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media5_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media5_heading',
        array(
            'label'           => sprintf( esc_html__( 'Pinterest Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media5_heading' ,
            'type'            => 'url',
        )
    );

    // Linkedin Link
    $wp_customize->add_setting(
        'legacy_book_club_social_media6_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_social_media6_heading',
        array(
            'label'           => sprintf( esc_html__( 'Linkedin Link', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_social_media6_heading' ,
            'type'            => 'url',
        )
    );


    // Title label
    $wp_customize->add_setting( 
        'legacy_book_club_label_header_settings_title', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_header_settings_title', 
        array(
            'label'       => esc_html__( 'Phone Number', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_home_header_settings',
            'type'        => 'legacy-book-club-title',
            'settings'    => 'legacy_book_club_label_header_settings_title',
        ) 
    ));

    $wp_customize->add_setting(
        'legacy_book_club_header_phone_head',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_header_phone_head',
        array(
            'label'           => sprintf( esc_html__( 'Calling Details Heading', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_header_phone_head' ,
            'type'            => 'text',
        )
    );

    // Phone Number
    $wp_customize->add_setting(
        'legacy_book_club_header_phone_number',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_header_phone_number',
        array(
            'label'           => sprintf( esc_html__( 'Phone Number', 'legacy-book-club' ), ),
            'section'         => 'legacy_book_club_home_header_settings',
            'settings'        => 'legacy_book_club_header_phone_number' ,
            'type'            => 'text',
        )
    );
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_header_register' );