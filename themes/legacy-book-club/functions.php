<?php
/**
 * Legacy Book Club functions and definitions.
 *
 * @package Legacy Book Club
 */

/**
 *  Defining Constants
 */

// Core Constants
define('LEGACY_BOOK_CLUB_REQUIRED_PHP_VERSION', '5.6' );
define('LEGACY_BOOK_CLUB_DIR_PATH', get_template_directory());
define('LEGACY_BOOK_CLUB_DIR_URI', get_template_directory_uri());

if ( ! function_exists( 'legacy_book_club_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function legacy_book_club_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'legacy-book-club' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(      
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Gallery post format
    add_theme_support( 'post-formats', array( 'gallery' ));

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'legacy_book_club_setup' );

/**
* Custom logo
*/
function legacy_book_club_logo_setup(){
    add_theme_support('custom-logo', array(
        'height' => 65,
        'width' => 350,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'legacy_book_club_logo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function legacy_book_club_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'legacy_book_club_content_width', 640 );
}
add_action( 'after_setup_theme', 'legacy_book_club_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function legacy_book_club_widgets_init() {
	//Footer widget columns
    $legacy_book_club_widget_num = absint(get_theme_mod( 'legacy_book_club_footer_widgets', '4' ));
    for ( $i=1; $i <= $legacy_book_club_widget_num; $i++ ) :
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Column', 'legacy-book-club' ) . $i,
            'id'            => 'footer-' . $i,
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="section %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title" itemprop="name">',
            'after_title'   => '</h4>',
        ) );
    endfor;

    register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'legacy-book-club' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'legacy-book-club' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'legacy_book_club_widgets_init' );

/** 
* Excerpt More
*/
function legacy_book_club_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
    return '&hellip;';
}
add_filter('excerpt_more', 'legacy_book_club_excerpt_more');


/** 
* Custom excerpt length.
*/
function legacy_book_club_excerpt_length() {
	$length= intval(get_theme_mod('legacy_book_club_posts_excerpt_length',30));
    return $length;
}
add_filter('excerpt_length', 'legacy_book_club_excerpt_length');

/*
script goes here
*/
function legacy_book_club_scripts() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '5.3.3');
    wp_enqueue_style( 'legacy-book-club-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style( 'm-customscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '3.1.5');    
    wp_enqueue_style( 'montserrat-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), '1.0');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel' . '.css', array(), '2.3.4' );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '2.6.2', true );
	wp_enqueue_script( 'resize-sensor', get_template_directory_uri() . '/js/ResizeSensor.js',array(),'1.0.0', true );
	wp_enqueue_script( 'm-customscrollbar-js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js',array(),'3.1.5', true );	
    
	wp_enqueue_script( 'html5shiv',get_template_directory_uri().'/js/html5shiv.js',array(), '3.7.3');
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.js' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.3.3', true );

    wp_enqueue_script( 'legacy-book-club-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
    wp_enqueue_script( 'owl-carouselscript', get_template_directory_uri() . '/js/owl.carousel' . '.js', array( 'jquery' ), '2.3.4', true );
    
}
add_action( 'wp_enqueue_scripts', 'legacy_book_club_scripts' );


/**
* Custom search form
*/
function legacy_book_club_search_form( $form ) {
    $form = '<form method="get" id="searchform" class="searchform" action="' . esc_url(home_url( '/' )) . '" >
    <div class="search">
      <input type="text" value="' . get_search_query() . '" class="blog-search" name="s" id="s" placeholder="'. esc_attr__( 'Search here','legacy-book-club' ) .'">
      <label for="searchsubmit" class="search-icon"><i class="bi bi-search"></i></label>
      <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search','legacy-book-club' ) .'" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'legacy_book_club_search_form', 100 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function legacy_book_club_pingback_header() {
    if ( is_singular() && pings_open() ) {
       printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
}
add_action( 'wp_head', 'legacy_book_club_pingback_header' );

// Add WooCommerce support to the theme
function legacy_book_club_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'legacy_book_club_add_woocommerce_support' );

// Change the number of product columns in WooCommerce shop page
function legacy_book_club_change_woocommerce_shop_columns( $columns ) {
    $columns = 3; // Change this number to your desired column count (e.g., 2, 3, 4, etc.)
    return $columns;
}
add_filter( 'loop_shop_columns', 'legacy_book_club_change_woocommerce_shop_columns', 999 );

function legacy_book_club_custom_woocommerce_cart_icon() {
    
    if ( class_exists( 'WooCommerce' ) && WC()->cart ) {
        
        $legacy_book_club_cart_count = WC()->cart->get_cart_contents_count();
        $legacy_book_club_cart_url = wc_get_cart_url();
        ?>
        
        <span class="cart-icon-wrapper">
            <a class="cart-contents" href="<?php echo esc_url($legacy_book_club_cart_url); ?>">
                <i class="bi bi-bag"></i>
                <?php if ($legacy_book_club_cart_count > 0) { ?>
                    <span class="cart-count"><?php echo esc_html($legacy_book_club_cart_count); ?></span>
                <?php } ?>
            </a>
        </span>
        
        <?php
    }
}

add_filter( 'woocommerce_add_to_cart_fragments', 'legacy_book_club_custom_woocommerce_cart_icon_fragments' );

function legacy_book_club_custom_woocommerce_cart_icon_fragments( $fragments ) {
    
    if ( class_exists( 'WooCommerce' ) ) {
        ob_start();
        legacy_book_club_custom_woocommerce_cart_icon();
        $fragments['div.cart-icon-wrapper'] = ob_get_clean();
    }
    return $fragments;
}

/**
 * Customizer additions.
 */
require get_parent_theme_file_path() . '/inc/customizer/customizer.php';

/**
 * Template functions
 */
require get_parent_theme_file_path() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path() . '/inc/template-tags.php';

/**
 * Custom template hooks for this theme.
 */
require get_parent_theme_file_path() . '/inc/template-hooks.php';

/**
 * Extra classes for this theme.
 */
require get_parent_theme_file_path() . '/inc/extras.php';
/**
 * tgm file.
 */
require get_template_directory() . '/inc/tgm/tgm.php';
