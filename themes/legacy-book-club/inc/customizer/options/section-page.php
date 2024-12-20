<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */


if ( ! function_exists( 'legacy_book_club_customizer_page_register' ) ) :
function legacy_book_club_customizer_page_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'legacy_book_club_page_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Page Settings', 'legacy-book-club' )
        )
    );

    // Info label
     $wp_customize->add_setting( 
        'legacy_book_club_label_page_title_hide_settings', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_page_title_hide_settings', 
        array(
            'label'       => esc_html__( 'Hide Page Title', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_page_settings',
            'type'        => 'legacy-book-club-title',
            'settings'    => 'legacy_book_club_label_page_title_hide_settings',
        ) 
    ));  

    // Hide page title section
    $wp_customize->add_setting(
        'legacy_book_club_enable_page_title',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'legacy_book_club_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_page_title', 
        array(
            'settings'      => 'legacy_book_club_enable_page_title',
            'section'       => 'legacy_book_club_page_settings',
            'type'          => 'legacy-book-club-toggle',
            'label'         => esc_html__( 'Show Page Title Section:', 'legacy-book-club' ),
            'description'   => '',           
        )
    ));

    // Info label
    $wp_customize->add_setting( 
        'legacy_book_club_label_page_title_bg_settings', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_page_title_bg_settings', 
        array(
            'label'       => esc_html__( 'Page Title Background', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_page_settings',
            'type'        => 'title',
            'settings'    => 'legacy_book_club_label_page_title_bg_settings',
            'active_callback' => 'legacy_book_club_page_title_enable',
        ) 
    ));

    // Background selection
    $wp_customize->add_setting(
        'legacy_book_club_page_bg_radio',
        array(
            'type' => 'theme_mod',
            'default'           => 'color',
            'sanitize_callback' => 'legacy_book_club_sanitize_select'
        )
    );

    $wp_customize->add_control(
    	new Legacy_Book_Club_Text_Radio_Control( $wp_customize, 'legacy_book_club_page_bg_radio',
        array(
            'settings'      => 'legacy_book_club_page_bg_radio',
            'section'       => 'legacy_book_club_page_settings',
            'type'          => 'radio',
            'label'         => esc_html__( 'Choose Page Title Background Color or Background Image:', 'legacy-book-club' ),
            'description'   => esc_html__('This setting will change the background of the page title area.', 'legacy-book-club'),
            'choices' => array(
                            'color' => esc_html__('Background Color','legacy-book-club'),
                            'image' => esc_html__('Background Image','legacy-book-club'),
                            ),
            'active_callback' => 'legacy_book_club_page_title_enable',
        )
    ));

    // Background color
    $wp_customize->add_setting(
        'legacy_book_club_page_bg_color',
        array(
            'type' => 'theme_mod',
            'default'           => '#564c4d',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'legacy_book_club_page_bg_color',
            array(
                'label'      => esc_html__( 'Select Background Color', 'legacy-book-club' ),
                'description'   => esc_html__('This setting will add background color to the page title area if Background Color was selected above.', 'legacy-book-club'),
                'section'    => 'legacy_book_club_page_settings',
                'settings'   => 'legacy_book_club_page_bg_color',
                'active_callback' => 'legacy_book_club_page_title_color_enable',
            )
        )
    );
    
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_page_register' );