<?php
/**
 * Template part for displaying posts.
 *
 * @package Legacy Book Club
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="blog-post">
            <div class="blog-image-wrapper">
                <?php
                    if(has_post_thumbnail()) {
                        ?>
                            <div class="image"><a href="<?php echo esc_url(get_permalink());?>" rel="bookmark"><?php
                                the_post_thumbnail('full');
                        ?> </a></div><?php
                    }
                ?>
            </div>
            <div class="blog-content-wrapper">            
                <h2 class="entry-title">
                    <?php
                        if (is_sticky() && is_home()) :
                            echo "<i class='bi bi-tags'></i>";
                        endif;
                    ?>
                    <a href="<?php echo esc_url(get_permalink());?>"rel="bookmark"><?php the_title();?></a>
                </h2>
                <div class="meta no-image">
                    <?php
                        if(true===get_theme_mod('legacy_book_club_enable_posts_meta_author',true)) :
                            ?>
                                <span class="meta-item author"><i class="bi bi-person"></i> <a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?></a>
                                </span>
                            <?php
                        endif;

                        if(true===get_theme_mod('legacy_book_club_enable_posts_meta_date',true)) :
                            ?>
                                <span class="meta-item date"><i class="bi bi-calendar-check"></i> <?php the_time(get_option('date_format')) ?>
                                </span>
                            <?php
                        endif;

                        if(true===get_theme_mod('legacy_book_club_enable_posts_meta_comments',true)) :
                            ?>
                            <span class="meta-item comments"><i class="bi bi-chat-dots"></i> <a class="post-comments-url" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%'); ?></a>
                                </span>
                            <?php
                        endif;
                    ?>
                </div>
                <div class="content">
                    <?php
                        if(is_single()){
                            the_content();
                            wp_link_pages(array(
                                'before'      => '<div class="page-link">' . esc_html__('Pages:','legacy-book-club'),
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                            ));
                            ?>
                                <div class="post-tags">
                                    <?php the_tags(); ?>
                                </div>
                                <div class="post-categories">
                                    <?php esc_html_e('Categories:','legacy-book-club') ?><?php the_category(); ?>
                                </div>
                            <?php
                        }
                        else{
                            the_excerpt();
                            $legacy_book_club_readmore = esc_html(get_theme_mod('legacy_book_club_posts_readmore_text',esc_html__('READ MORE +','legacy-book-club')));
                            if(!empty($legacy_book_club_readmore)) {
                                ?>
                                    <div class="read-more">
                                        <a href="<?php echo esc_url(get_permalink() ); ?>"><?php echo $legacy_book_club_readmore ?></a>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>                
            </div>
        </div>
    </article>   