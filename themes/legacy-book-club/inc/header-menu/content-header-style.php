<?php
/**
 * Template part for displaying header menu
 *
 * @package Legacy Book Club
 */

?>
<?php
    $legacy_book_club_page_val= is_front_page() ? 'home':'page' ;

?>

<header id="<?php echo esc_attr($legacy_book_club_page_val);?>-inner" class="elementer-menu-anchor theme-menu-wrapper full-width-menu style1 page" role="banner">
    <?php
        if(true===get_theme_mod('legacy_book_club_enable_highlighted area',true) && is_front_page()){
            ?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('skip to content','legacy-book-club'); ?> </a> <?php
        }
        else{
        ?><a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('skip to content','legacy-book-club');?></a> <?php
    }
    ?>
    <div id="header-main" class="header-wrapper">
        <div id="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 align-self-center">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-6 align-self-center text-center">
                                <div class="hdr-account">
                                <?php if(class_exists('woocommerce')){ ?>
                                    <?php if ( is_user_logged_in() ) { ?>
                                        <div><a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','legacy-book-club'); ?>"><p class="account-txt m-0" ><?php esc_html_e( 'My Account','legacy-book-club' );?></p></a></div>
                                    <?php }
                                    else { ?>
                                        <a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','legacy-book-club'); ?>"><?php esc_html_e( 'Login / Register','legacy-book-club' );?></a>
                                    <?php } ?>
                                <?php }?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-6 align-self-center text-center">
                                <div class="wishlist">
                                   <?php if (class_exists('woocommerce')) { ?>
                                        <?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 align-self-center text-center px-md-0">
                               <div class="follow-us my-2 my-lg-0">
                                    <?php
                                        $legacy_book_club_social_media1_heading = get_theme_mod( 'legacy_book_club_social_media1_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media1_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media1_heading ); ?>"><i class="bi bi-facebook me-4"></i></a>
                                    <?php } ?>
                                    <?php
                                        $legacy_book_club_social_media2_heading = get_theme_mod( 'legacy_book_club_social_media2_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media2_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media2_heading ); ?>"><i class="bi bi-instagram me-4"></i></a>
                                    <?php } ?>
                                    <?php
                                        $legacy_book_club_social_media3_heading = get_theme_mod( 'legacy_book_club_social_media3_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media3_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media3_heading ); ?>"><i class="bi bi-twitter-x me-4"></i></a>
                                    <?php } ?>
                                    <?php
                                        $legacy_book_club_social_media4_heading = get_theme_mod( 'legacy_book_club_social_media4_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media4_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media4_heading ); ?>"><i class="bi bi-youtube me-4"></i></a>
                                    <?php } ?>
                                    <?php
                                        $legacy_book_club_social_media5_heading = get_theme_mod( 'legacy_book_club_social_media5_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media5_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media5_heading ); ?>"><i class="bi bi-pinterest me-4"></i></a>
                                    <?php } ?>
                                    <?php
                                        $legacy_book_club_social_media6_heading = get_theme_mod( 'legacy_book_club_social_media6_heading', '' );
                                        if ( ! empty( $legacy_book_club_social_media6_heading ) ) { ?>
                                        <a href="<?php echo esc_url( $legacy_book_club_social_media6_heading ); ?>"><i class="bi bi-linkedin me-4"></i></a>
                                    <?php } ?>
                                </div> 
                            </div>
                            <div class="col-lg-2 col-md-2 col-6 align-self-center px-lg-0 px-md-0">
                                <?php
                                    $legacy_book_club_topbar_register_button_link = get_theme_mod( 'legacy_book_club_topbar_register_button_link', '' );
                                    if ( ! empty( $legacy_book_club_topbar_register_button_link ) ) { ?>
                                    <div class="topbar-button text-center py-2">
                                        <a href="<?php echo esc_url( $legacy_book_club_topbar_register_button_link ); ?>"><?php echo esc_html('Register','legacy-book-club'); ?></a>
                                    </div> 
                                <?php } ?>
                            </div>
                            <div class="col-lg-2 col-md-2 col-6 align-self-center ps-0">
                                <?php
                                    $legacy_book_club_topbar_login_button_link = get_theme_mod( 'legacy_book_club_topbar_login_button_link', '' );
                                    if ( ! empty( $legacy_book_club_topbar_login_button_link ) ) { ?>
                                    <div class="topbar-button2 text-center py-2">
                                        <a href="<?php echo esc_url( $legacy_book_club_topbar_login_button_link ); ?>"><i class="bi bi-lock-fill me-1"></i><?php echo esc_html('Login','legacy-book-club'); ?></a> 
                                    </div> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="topbar2">
            <div class="container-fluid">
                <div class="row pt-3">
                    <div class="col-lg-2 col-md-2 col-12 align-self-center text-center text-lg-start text-md-start">
                        <div class="logo <?php echo (has_custom_logo() ? 'has-logo' : 'no-logo'); ?>" itemscope itemtype="https://schema.org/Organization">
                            <?php 
                                if (has_custom_logo()) :
                                    legacy_book_club_custom_logo();
                                endif;                                          
                            ?>
                            <?php 
                                if ( get_theme_mod( 'legacy_book_club_enable_logo_stickyheader', false )) :
                                    $alt_logo=esc_url(get_theme_mod( 'legacy_book_club_logo_stickyheader' ));
                                    if(!empty($alt_logo)) :
                                        ?>
                                            <a id="logo-alt" class="logo-alt" href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo esc_url( get_theme_mod( 'legacy_book_club_logo_stickyheader' ) ); ?>" alt="<?php esc_attr_e( 'logo', 'legacy-book-club' ); ?>"></a>
                                        <?php
                                    endif;
                                endif; ?>
                            <?php
                                $show_title   = ( true === get_theme_mod( 'legacy_book_club_display_site_title_tagline', true ) );
                                $legacy_book_club_header_class = $show_title ? 'site-title' : 'screen-reader-text';
                                if(!empty(get_bloginfo( 'name' ))) {
                                    if ( is_front_page() ) { ?>
                                        <h1 class="<?php echo esc_attr( $legacy_book_club_header_class ); ?>">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
                                        </h1>
                                <?php
                                    if(true === get_theme_mod( 'legacy_book_club_display_site_title_tagline', true )) {
                                            $legacy_book_club_description = esc_html(get_bloginfo( 'description', 'display' ));
                                            if ( $legacy_book_club_description || is_customize_preview() ) { 
                                                ?>
                                                    <p class="site-description"><?php echo $legacy_book_club_description; ?></p>
                                                <?php 
                                            }
                                        }
                                    }
                                    else { ?>
                                        <p class="<?php echo esc_attr( $legacy_book_club_header_class ); ?>">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a>
                                        </p>
                                        <?php
                                        if(true === get_theme_mod( 'legacy_book_club_display_site_title_tagline', true )) {
                                            $legacy_book_club_description = esc_html(get_bloginfo( 'description', 'display' ));
                                            if ( $legacy_book_club_description || is_customize_preview() ) { 
                                                ?>
                                                    <p class="site-description"><?php echo $legacy_book_club_description; ?></p>
                                                <?php 
                                            }
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-5 col-12 align-self-center">
                        <div class="topbr-search-box px-2">
                            <form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="search-field-wrapper">            
                                    <span>
                                        <input type="search" class="search-field ps-3" placeholder="<?php echo esc_attr__('Search...', 'legacy-book-club'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                        <input type="hidden" name="post_type" value="product" />
                                    </span>
                                    <?php if (class_exists('woocommerce')) { ?>
                                        <span>            
                                            <select name="product_cat" id="product_cat" class="search-category-dropdown">
                                                <option value=""><?php esc_html_e('All Categories', 'legacy-book-club'); ?></option>
                                                <?php 
                                                $categories = get_terms(array(
                                                    'taxonomy' => 'product_cat',
                                                    'hide_empty' => true,
                                                ));

                                                if (!is_wp_error($categories) && !empty($categories)) {
                                                    foreach ($categories as $category) {
                                                        if (is_object($category) && isset($category->slug)) {
                                                            echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </span>
                                    <?php } ?>
                                    <span>            
                                        <button type="submit" value="<?php echo esc_attr__('Search', 'legacy-book-club'); ?>" class="search-submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12 align-self-center text-lg-start text-center text-md-start">
                        <?php $legacy_book_club_header_phone_number = get_theme_mod('legacy_book_club_header_phone_number', '' );
                            $legacy_book_club_header_phone_head = get_theme_mod('legacy_book_club_header_phone_head', '' );
                        if ( ! empty( $legacy_book_club_header_phone_number ) ) { ?>
                            <div class="row call-detail mb-3 mb-lg-0 mb-md-0">
                                <div class="col-lg-2 col-md-2 col-3 align-self-center text-end pe-0">
                                    <i class="bi bi-telephone call-icn"></i>
                                </div>
                                <div class="col-lg-10 col-md-10 col-9 align-self-center">
                                    <p class="hd-call mb-0">
                                    <?php echo esc_html( $legacy_book_club_header_phone_head ); ?></p>
                                    <p class="hd-call-no mb-0">
                                    <?php echo esc_html( $legacy_book_club_header_phone_number ); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-1 col-md-2 col-12 align-self-center text-lg-end text-center text-md-end hdr-icns">
                        <span class="tbr2-account">
                            <?php if(class_exists('woocommerce')){ ?>
                                <?php if ( is_user_logged_in() ) { ?>
                                    <a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','legacy-book-club'); ?>"><i class="bi bi-person"></i></a>
                                <?php }
                                else { ?>
                                    <a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','legacy-book-club'); ?>"><?php esc_html_e( 'Login / Register','legacy-book-club' );?></a>
                                <?php } ?>
                            <?php }?>
                        </span>
                        <span class="topbr2-wishlist px-2">
                            <?php if (class_exists('woocommerce')) { ?>
                                <?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
                            <?php } ?>
                        </span>
                        <span class="tbr2-cart pe-lg-3">
                            <?php legacy_book_club_custom_woocommerce_cart_icon(); ?>
                        </span>
                    </div>
                </div>
            </div>            
        </div>
        <div id="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-10 px-3">
                        <div class="cont-hdr-dd"> 
                            <?php if (class_exists('woocommerce')) { ?>  
                                <div class="custom-dropdown" data-base-url="<?php echo esc_url(home_url('/index.php/')); ?>">
                                    <button class="dropdown-button">
                                        <span class="bar-cat">
                                            <i class="bi bi-text-left me-2"></i>
                                        </span>
                                        <?php esc_html_e('Categories', 'legacy-book-club'); ?>
                                    </button>
                                    <ul class="dropdown-list">
                                        <?php 
                                        $categories = get_terms(array(
                                            'taxonomy' => 'product_cat',
                                            'hide_empty' => true,
                                        ));
                                        foreach ($categories as $category) {
                                            $legacy_book_club_category_link = get_term_link($category);
                                            if (!is_wp_error($legacy_book_club_category_link)) { // Ensure the link generation doesn't fail
                                                echo '<li data-value="' . esc_attr($category->slug) . '">';
                                                echo '<a href="' . esc_url($legacy_book_club_category_link) . '">' . esc_html($category->name) . '</a>';
                                                echo '</li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-2 align-self-center">
                        <div class="top-menu-wrapper">
                            <nav class="top-menu navbar navbar-expand-md" role="navigation" aria-label="<?php esc_attr_e('primary', 'legacy-book-club'); ?>">
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary',
                                            'depth' => 3,
                                            'container' => 'ul',
                                            'container_class' => 'navigation',
                                            'container_id' => 'menu-primary',
                                            'menu_class' => 'navigation',
                                        ));
                                    ?>
                                </div>
                            </nav>
                            <nav class="responsive-mobile">
                                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="<?php esc_attr_e('Toggle Navigation', 'legacy-book-club'); ?>">
                                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                                </button>
                                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                                    <div class="offcanvas-header">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="<?php esc_attr_e('Close', 'legacy-book-club'); ?>"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div id="navbar-collapse-2">
                                            <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'primary',
                                                    'depth' => 3,
                                                    'container' => 'ul',
                                                    'container_class' => 'navbar-nav',
                                                    'container_id' => 'menu-primary',
                                                    'menu_class' => 'navigation',
                                                ));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>    
</header>

<div class="clearfix"></div>
<div id="content" class="elementor-menu-anchor"></div>

<div class="content-wrap">