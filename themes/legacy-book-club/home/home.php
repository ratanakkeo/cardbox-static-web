<?php
/**
 * Template Name: Home
 */

get_header();
?>

<main id="primary">
        
    <?php
        /**
         * Hook - legacy_book_club_action_home_banner.
         *
         * @hooked legacy_book_club_home_banner_section - 10
         */
        do_action( 'legacy_book_club_action_home_banner' );

        /**
         * Hook - legacy_book_club_action_home_product.
         *
         * @hooked legacy_book_club_home_product_section - 10
         */
        do_action( 'legacy_book_club_action_home_product' );
    ?>
    
</main>

<?php
get_footer();