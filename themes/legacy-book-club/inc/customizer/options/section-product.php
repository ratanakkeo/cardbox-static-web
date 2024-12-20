<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */

if ( ! function_exists( 'legacy_book_club_customizer_home_product_register' ) ) :
function legacy_book_club_customizer_home_product_register( $wp_customize ) {

    $wp_customize->add_section(
        'legacy_book_club_home_product_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Product Settings', 'legacy-book-club' )
        )
    );

    // Title label
    $wp_customize->add_setting( 
        'legacy_book_club_label_product_settings_title', 
        array(
            'sanitize_callback' => 'legacy_book_club_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_product_settings_title', 
        array(
            'label'       => esc_html__( 'Product Settings', 'legacy-book-club' ),
            'section'     => 'legacy_book_club_home_product_settings',
            'type'        => 'legacy-book-club-title',
            'settings'    => 'legacy_book_club_label_product_settings_title',
        ) 
    ));
    
     // Get all product categories to populate the dropdown
    $args = array(
        'taxonomy'   => 'product_cat',
        'orderby'    => 'name',
        'order'      => 'ASC',
        'hide_empty' => false, // Show even empty categories
    );

    $categories = get_terms( $args );
    $cats = array();

    // Prepare categories for the dropdown
    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
        foreach ( $categories as $category ) {
            $cats[$category->slug] = $category->name;
        }
    }

    $wp_customize->add_setting(
        'legacy_book_club_product_category',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_product_category',
        array(
            'label'    => esc_html__( 'Select Product Category', 'legacy-book-club' ),
            'section'  => 'legacy_book_club_home_product_settings',
            'settings' => 'legacy_book_club_product_category',
            'type'     => 'select',
            'choices'  => $cats,
        )
    );

   $wp_customize->add_setting( 'legacy_book_club_product_count', array(
        'default'           => 4, 
        'sanitize_callback' => 'absint',
    ));

    // Add control for number of products
    $wp_customize->add_control( 'legacy_book_club_product_count', array(
        'label'       => __( 'Number of Products to Display', 'legacy-book-club' ),
        'section'     => 'legacy_book_club_home_product_settings', 
        'type'        => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 8,
        ),
    ));
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_home_product_register' );