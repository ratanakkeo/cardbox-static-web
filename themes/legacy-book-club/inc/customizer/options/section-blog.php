<?php
/**
 * Theme Customizer Controls
 *
 * @package Legacy Book Club
 */


if ( ! function_exists( 'legacy_book_club_customizer_blog_register' ) ) :
function legacy_book_club_customizer_blog_register( $wp_customize ) {
	
	$wp_customize->add_panel(
        'legacy_book_club_blog_settings_panel',
        array (
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Blog Settings', 'legacy-book-club' ),
        )
    );

	// Section Posts
    $wp_customize->add_section(
        'legacy_book_club_posts_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Posts', 'legacy-book-club' ),
            'panel'          => 'legacy_book_club_blog_settings_panel',
        )
    ); 


	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_post_meta_show', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_post_meta_show', 
		array(
		    'label'       => esc_html__( 'Posts Meta', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_post_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'legacy_book_club_enable_posts_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_posts_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_posts_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'legacy_book_club_enable_posts_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_posts_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_posts_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'legacy_book_club_enable_posts_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_posts_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_posts_meta_comments',
		) 
	));


	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_sidebar_layout', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'legacy_book_club_blog_sidebar_layout',
        array(
            'default'			=> 'right',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'legacy_book_club_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Legacy_Book_Club_Radio_Image_Control( $wp_customize,'legacy_book_club_blog_sidebar_layout',
            array(
                'settings'		=> 'legacy_book_club_blog_sidebar_layout',
                'section'		=> 'legacy_book_club_posts_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'legacy-book-club' ),
                'choices'		=> array(
                    'right'	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'no' 	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_blog_excerpt', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_blog_excerpt', 
		array(
		    'label'       => esc_html__( 'Post Excerpt', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_posts_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_blog_excerpt',
		) 
	));

	// add post excerpt textbox
    $wp_customize->add_setting(
        'legacy_book_club_posts_excerpt_length',
        array(
            'type' => 'theme_mod',
            'default'           => 30,
            'sanitize_callback' => 'legacy_book_club_sanitize_number',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_posts_excerpt_length',
        array(
            'settings'      => 'legacy_book_club_posts_excerpt_length',
            'section'       => 'legacy_book_club_posts_settings',
            'type'          => 'number',
            'label'         => esc_html__( 'Post Excerpt Length', 'legacy-book-club' ),
        )
    );

    // add readmore textbox
    $wp_customize->add_setting(
        'legacy_book_club_posts_readmore_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'READ MORE', 'legacy-book-club' ),
            'sanitize_callback' => 'legacy_book_club_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_posts_readmore_text',
        array(
            'settings'      => 'legacy_book_club_posts_readmore_text',
            'section'       => 'legacy_book_club_posts_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Read More Text', 'legacy-book-club' ),
        )
    );

    //=========================================================================

	// Section Single Post
    $wp_customize->add_section(
        'legacy_book_club_single_post_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Single Post', 'legacy-book-club' ),
            'panel'          => 'legacy_book_club_blog_settings_panel',
        )
    ); 


    // Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_single_post_category_show', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_single_post_category_show', 
		array(
		    'label'       => esc_html__( 'Post Category', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_single_post_category_show',
		) 
	));

	// Add an option to enable the category
	$wp_customize->add_setting( 
		'legacy_book_club_enable_single_post_cat', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_single_post_cat', 
		array(
		    'label'       => esc_html__( 'Show Category', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_single_post_cat',
		) 
	));

	// add category textbox
    $wp_customize->add_setting(
        'legacy_book_club_single_post_category_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Category:', 'legacy-book-club' ),
            'sanitize_callback' => 'legacy_book_club_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_single_post_category_text',
        array(
            'settings'      => 'legacy_book_club_single_post_category_text',
            'section'       => 'legacy_book_club_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Category Text', 'legacy-book-club' ),
        )
    );

	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_single_post_tag_show', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_single_post_tag_show', 
		array(
		    'label'       => esc_html__( 'Post Tags', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_single_post_tag_show',
		) 
	));

	// Add an option to enable the tags
	$wp_customize->add_setting( 
		'legacy_book_club_enable_single_post_tags', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_single_post_tags', 
		array(
		    'label'       => esc_html__( 'Show Tags', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_single_post_tags',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_single_pos_meta_show', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_single_pos_meta_show', 
		array(
		    'label'       => esc_html__( 'Post Meta', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_single_pos_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'legacy_book_club_enable_single_post_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_single_post_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_single_post_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'legacy_book_club_enable_single_post_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_single_post_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_single_post_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'legacy_book_club_enable_single_post_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'legacy_book_club_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Toggle_Control( $wp_customize, 'legacy_book_club_enable_single_post_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-toggle',
		    'settings'    => 'legacy_book_club_enable_single_post_meta_comments',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_single_pos_nav_show', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_single_pos_nav_show', 
		array(
		    'label'       => esc_html__( 'Post Navigation', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_single_pos_nav_show',
		) 
	));

    // add next article textbox
    $wp_customize->add_setting(
        'legacy_book_club_single_post_next_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Next Article', 'legacy-book-club' ),
            'sanitize_callback' => 'legacy_book_club_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_single_post_next_article_text',
        array(
            'settings'      => 'legacy_book_club_single_post_next_article_text',
            'section'       => 'legacy_book_club_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Next Article Text', 'legacy-book-club' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'legacy-book-club' ),
        )
    );

    // add previous article textbox
    $wp_customize->add_setting(
        'legacy_book_club_single_post_previous_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Previous Article', 'legacy-book-club' ),
            'sanitize_callback' => 'legacy_book_club_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'legacy_book_club_single_post_previous_article_text',
        array(
            'settings'      => 'legacy_book_club_single_post_previous_article_text',
            'section'       => 'legacy_book_club_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Previous Article Text', 'legacy-book-club' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'legacy-book-club' ),
        )
    );


	// Title label
	$wp_customize->add_setting( 
		'legacy_book_club_label_single_sidebar_layout', 
		array(
		    'sanitize_callback' => 'legacy_book_club_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Legacy_Book_Club_Title_Info_Control( $wp_customize, 'legacy_book_club_label_single_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'legacy-book-club' ),
		    'section'     => 'legacy_book_club_single_post_settings',
		    'type'        => 'legacy-book-club-title',
		    'settings'    => 'legacy_book_club_label_single_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'legacy_book_club_blog_single_sidebar_layout',
        array(
            'default'			=> 'no',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'legacy_book_club_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Legacy_Book_Club_Radio_Image_Control( $wp_customize,'legacy_book_club_blog_single_sidebar_layout',
            array(
                'settings'		=> 'legacy_book_club_blog_single_sidebar_layout',
                'section'		=> 'legacy_book_club_single_post_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'legacy-book-club' ),
                'choices'		=> array(
                    'right'	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'no' 	        => LEGACY_BOOK_CLUB_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );
}
endif;

add_action( 'customize_register', 'legacy_book_club_customizer_blog_register' );