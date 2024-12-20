<?php
/**
 * The template for displaying archive pages.
 *
 * @package Legacy Book Club
 */


get_header();
legacy_book_club_before_title();
if(true===get_theme_mod( 'legacy_book_club_enable_page_title',true)) :
	do_action('legacy_book_club_get_page_title',false,true,false,false);
endif;
legacy_book_club_after_title();

?>

<div id="primary" class="content-area">
    <div id="main" class="site-main" role="main">
        <div class="container-inner">
            <div id="blog-section">
                <div class="container">
                    <div class="row">
                        <?php
                            if('right'===esc_html(get_theme_mod('legacy_book_club_blog_sidebar_layout','right'))){
                                ?>
                                    <?php
                                        if( is_active_sidebar('sidebar-1')){
                                            ?>
                                                <div id="post-wrapper" class="col-md-9">
                                                	<div class="archive heading">
			   											<h1 class="main-title"><?php the_archive_title(); ?></h1>
													</div>
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>                                                 
                                                </div>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else if('left'=== esc_html(get_theme_mod('legacy_book_club_blog_sidebar_layout','right'))) {
                                ?>
                                    <?php
                                        if(is_active_sidebar('sidebar-1')){
                                            ?>
                                                <div id="sidebar-wrapper" class="col-md-3">
                                                    <?php get_sidebar('sidebar-1'); ?>                                                 
                                                </div>
                                                <div id="post-wrapper" class="col-md-9">
                                                	<div class="archive heading">
   											 			<h1 class="main-title"><?php the_archive_title(); ?></h1>
													</div>
                                                    <?php
                                                        if(have_posts())
                                                        {
                                                            while(have_Posts() ) {
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php    
                                                        }
                                                    ?>                                                 
                                                </div>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="col-md-12">
                                                    <?php
                                                        if(have_posts()) {
                                                            while(have_posts()){
                                                                the_post();
                                                                
                                                                get_template_part('template-parts/post/content',get_post_format());
                                                            }
                                                            ?>
                                                                <nav class="pagination">
                                                                    <?php the_posts_pagination(); ?>
                                                                </nav>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                <?php
                            }
                            else{
                                ?>
                                    <div class="col-md-12">
                                    	<div class="archive heading">
   											<h1 class="main-title"><?php the_archive_title(); ?></h1>
										</div>
                                        <?php
                                            if(have_posts()) {
                                                while(have_posts()) {
                                                    the_post();
                                                    
                                                    get_template_part('template-parts/post/content',get_post_format());
                                                }
                                                ?>
                                                    <nav class="pagination">
                                                        <?php the_posts_pagination(); ?>
                                                    </nav>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();