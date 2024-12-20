<?php
/**
 * @package Legacy Book Club
 */

/**
 * Footer
 */
if (! function_exists( 'legacy_book_club_footer_copyrights' ) ):
    function legacy_book_club_footer_copyrights() {
        ?>
            <div class="row">
                <div class="copyrights">
                    <p>
                        <?php
                            if("" != esc_html(get_theme_mod( 'legacy_book_club_footer_copyright_text'))) :
                                echo esc_html(get_theme_mod( 'legacy_book_club_footer_copyright_text'));
                                if(get_theme_mod('legacy_book_club_en_footer_credits',true)) :
                                    ?>
                                    <span><?php esc_html_e(' | Theme by ','legacy-book-club') ?><?php esc_html_e('Legacy Themes','legacy-book-club') ?></span>
                                    <?php   
                                endif;
                            else :
                                echo date_i18n(
                                    /* translators: Copyright date format, see https://secure.php.net/date */
                                    _x( 'Y', 'copyright date format', 'legacy-book-club' )
                                );
                                ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                    <span><?php esc_html_e(' | Theme by ','legacy-book-club') ?><?php esc_html_e('Legacy Themes','legacy-book-club') ?></span>
                                <?php
                            endif;
                        ?>
                    </p>
                </div>
            </div>
        <?php    
    }
endif;
add_action( 'legacy_book_club_action_footer', 'legacy_book_club_footer_copyrights' );


/**
 * Page Title Settings
 */
if (!function_exists('legacy_book_club_show_page_title')):
    function legacy_book_club_show_page_title( $legacy_book_club_blogtitle=false,$legacy_book_club_archivetitle=false,$legacy_book_club_searchtitle=false,$legacy_book_club_pagenotfoundtitle=false ) {
        if(!is_front_page()){
            if ('color' === esc_html(get_theme_mod( 'legacy_book_club_page_bg_radio','color' ))) {
                ?>
                    <div class="page-title" style="background:<?php echo sanitize_hex_color(get_theme_mod( 'legacy_book_club_page_bg_color','#564c4d' )); ?>;">
                <?php
            }
            else if('image' === esc_html(get_theme_mod( 'legacy_book_club_page_bg_radio','color' ))){
                $image= esc_url(get_template_directory_uri().'/img/start-bg.jpg');
                ?>
                <?php
                    if ( has_post_thumbnail()) {
                        $legacy_book_club_featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                        ?>
                            <div class="page-title" style="background:url('<?php echo esc_url($legacy_book_club_featured_img_url) ?>') no-repeat scroll center center / cover;"> 
                        <?php }
                    else{
                        ?>
                            <div class="page-title"  style="background:url('<?php echo esc_url($image ); ?>') no-repeat scroll center center / cover;">    
                        <?php } ?>                    
                <?php }
            else{ ?>
                <div class="page-title" style="background:#564c4d;"> 
                <?php } ?>
                <div class="content-section img-overlay">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="section-title page-title"> 
                                    <?php
                                        if($legacy_book_club_blogtitle){
                                            ?><h1 class="main-title"><?php single_post_title(); ?></h1><?php
                                        }
                                        if($legacy_book_club_archivetitle){
                                            ?><h1 class="main-title"><?php the_archive_title(); ?></h1><?php
                                        }
                                        if($legacy_book_club_searchtitle){
                                            ?><h1 class="main-title"><?php esc_html_e('SEARCH RESULTS','legacy-book-club') ?></h1><?php
                                        }
                                        if($legacy_book_club_pagenotfoundtitle){
                                            ?><h1 class="main-title"><?php esc_html_e('PAGE NOT FOUND','legacy-book-club') ?></h1><?php
                                        }                                       
                                        
                                        if($legacy_book_club_blogtitle==false && $legacy_book_club_archivetitle==false && $legacy_book_club_searchtitle==false && $legacy_book_club_pagenotfoundtitle==false){
                                            ?><h1 class="main-title"><?php the_title(); ?></h1><?php
                                        }
                                    ?>                                                       
                                </div>                      
                            </div>
                        </div>
                    </div>  
                </div>
                </div>  <!-- End page-title --> 
            <?php
        }
    }
endif;
add_action('legacy_book_club_get_page_title', 'legacy_book_club_show_page_title');


/**
 * Home Banner Section
 */
if (! function_exists( 'legacy_book_club_home_banner_section' ) ):
    function legacy_book_club_home_banner_section() {
        ?>
        <section id="main-banner-wrap">
            <?php
                $legacy_book_club_banner_image = get_theme_mod( 'legacy_book_club_banner_image', '' );
                if ( ! empty( $legacy_book_club_banner_image ) ) { ?>
            <div class="banner-side-margin position-relative px-3">
                <div class="main-banner-inner-box">                   
                    <img src="<?php echo esc_url( $legacy_book_club_banner_image ); ?>">
                </div>
                <div class="main-banner-content-box">
                    <?php
                        $legacy_book_club_banner_small_head = get_theme_mod( 'legacy_book_club_banner_small_head', '' );
                        if ( ! empty( $legacy_book_club_banner_small_head ) ) { ?>
                        <h6 class="bnnr-sm-hd m-0 p-0 ps-lg-3"><?php echo esc_html( $legacy_book_club_banner_small_head ); ?></h6>
                    <?php } ?>
                    <?php
                        $legacy_book_club_banner_heading = get_theme_mod( 'legacy_book_club_banner_heading', '' );                        
                        if ( ! empty( $legacy_book_club_banner_heading ) ) { ?>
                            <h2 id="banner-heading" class="bnr-hd1 p-0 mb-0 mb-lg-3"><?php echo esc_html( $legacy_book_club_banner_heading ); ?></h2>
                    <?php } ?> 
                    <?php
                        $legacy_book_club_banner_offer_head = get_theme_mod( 'legacy_book_club_banner_offer_head', '' );
                        $legacy_book_club_banner_offer_discount = get_theme_mod( 'legacy_book_club_banner_offer_discount', '' );
                        if ( ! empty( $legacy_book_club_banner_offer_head) ||  ! empty( $legacy_book_club_banner_offer_discount) ) { ?>                   
                        <div class="offer-box p-2">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-8 text-end">
                                    <h6 id="offer-heading" class="offer-hd p-0 m-0"><?php echo esc_html( $legacy_book_club_banner_offer_head ); ?></h6>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4 text-center">
                                    <h6 class="offer-discnt p-0 m-0"><?php echo esc_html( $legacy_book_club_banner_offer_discount ); ?></h6>
                                </div>
                            </div>                        
                        </div>
                    <?php } ?> 
                </div>    
            </div>
            <?php } ?>
        </section>
        <?php
    }
endif;
add_action( 'legacy_book_club_action_home_banner', 'legacy_book_club_home_banner_section' );


/**
 * Home product Section
 */
if (! function_exists( 'legacy_book_club_home_product_section' ) ):
    function legacy_book_club_home_product_section() {
        ?>
        <section id="product-wrap" class="py-5">
            <div class="container-fluid">
                <div class="inner-wrap px-lg-5 px-md-5">
                    <div class="product-head">
                        <?php
                            $legacy_book_club_product_main_heading = get_theme_mod( 'legacy_book_club_product_main_heading', '' );
                            if ( ! empty( $legacy_book_club_product_main_heading ) ) { ?>
                            <h3 class="py-2"><?php echo esc_html( $legacy_book_club_product_main_heading ); ?></h3>
                        <?php } ?>
                    </div>
                    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                        <div class="product-box">
                            <div class="owl-carousel">    
                            <?php
                                $legacy_book_club_selected_category = get_theme_mod('legacy_book_club_product_category', '');
                                
                                $legacy_book_club_product_count = get_theme_mod('legacy_book_club_product_count', 4);                 
                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => $legacy_book_club_product_count,
                                    'order'          => 'ASC',
                                    'tax_query'      => !empty($legacy_book_club_selected_category) ? array(
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field'    => 'slug',
                                            'terms'    => $legacy_book_club_selected_category,),) : '',
                                );                                
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); global $product;
                            ?>                            
                            <div class="product-inn inner-project text-center p-2 mb-3 mt-2 mx-2">
                                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, ''); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                                <h3 class="product-text mb-0 pt-1"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h3>
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-1">
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-7 align-self-center">
                                        <div class="star-rating">
                                            <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-4 text-lg-start text-center text-md-start">
                                        <span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> price-prod"><?php echo $product->get_price_html(); ?></span>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>                                                       
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php } ?>
                    </div>
                </div>                
            </div>
        </section>
        <?php    
    }
endif;
add_action( 'legacy_book_club_action_home_product', 'legacy_book_club_home_product_section' );