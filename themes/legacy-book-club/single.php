<?php
/**
 * The template for displaying all single posts.
 *
 * @package Legacy Book Club
 */

get_header();
legacy_book_club_before_title();
if(true===get_theme_mod( 'legacy_book_club_enable_page_title',true)) :
    do_action('legacy_book_club_get_page_title',false,false,false,false);
endif;
legacy_book_club_after_title();

$legacy_book_club_prevarticle = esc_html(get_theme_mod( 'legacy_book_club_single_post_previous_article_text', esc_html__('Previous Article','legacy-book-club')));
$legacy_book_club_nextarticle = esc_html(get_theme_mod( 'legacy_book_club_single_post_next_article_text', esc_html__('Next Article','legacy-book-club')));

?>
<div class="content-section img-overlay"></div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="content-inner">
			<div id="blog-section">
				<div class="container">
			        <div class="row">
			        	<?php
			        		if('right'===esc_html(get_theme_mod('legacy_book_club_blog_single_sidebar_layout','right'))) {
			        			?>
			        				<?php
			        					if ( is_active_sidebar('sidebar-1')){
			        						?>
			        							<div id="post-wrapper" class="col-md-9">
													<?php
														while ( have_posts() ) : the_post();

															get_template_part( 'template-parts/post/content', 'single');

															the_post_navigation(
															    array(
															        'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="bi bi-arrow-left-circle"></i>'. $legacy_book_club_prevarticle .'</span> ' .
																					'<span class="screen-reader-text"> '. $legacy_book_club_prevarticle .' </span> ' .
																					'<h5 class="post-title">%title</h5>',
															        'next_text' => '<span class="meta-nav" aria-hidden="true">'. $legacy_book_club_nextarticle .'</span> ' .
																					'<span class="screen-reader-text">'. $legacy_book_club_nextarticle .'</span> <i class="bi bi-arrow-right-circle"></i> ' .
																					'<h5 class="post-title">%title</h5>',
															        'screen_reader_text' => esc_html__('Posts navigation', 'legacy-book-club')
															    )
															);

															// If comments are open or we have at least one comment, load up the comment template.
															if ( comments_open() || get_comments_number() ) :
																comments_template();
															endif;

														endwhile; // End of the loop.
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
														while ( have_posts() ) : the_post();

															get_template_part( 'template-parts/post/content', 'single');

															the_post_navigation(
															    array(
															        'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="bi bi-arrow-left-circle"></i>'. $legacy_book_club_prevarticle .'</span> ' .
																					'<span class="screen-reader-text">'. $legacy_book_club_prevarticle .' </span> ' .
																					'<h5 class="post-title">%title</h5>',
															        'next_text' => '<span class="meta-nav" aria-hidden="true">'. $legacy_book_club_nextarticle .'</span> ' .
																					'<span class="screen-reader-text">'. $legacy_book_club_nextarticle .'</span><i class="bi bi-arrow-right-circle"></i> ' .
																					'<h5 class="post-title">%title</h5>',
															        'screen_reader_text' => esc_html__('Posts navigation', 'legacy-book-club')
															    )
															);

															// If comments are open or we have at least one comment, load up the comment template.
															if ( comments_open() || get_comments_number() ) :
																comments_template();
															endif;

														endwhile; // End of the loop.
													?>							
												</div>
			        						<?php
			        					}
	                				?>
			        				
			        			<?php
			        		}
			        		else if('left'===esc_html(get_theme_mod('legacy_book_club_blog_single_sidebar_layout','right'))) {
			        			?>
			        				<?php
			        					if ( is_active_sidebar('sidebar-1')){
			        						?>
			        							<div id="sidebar-wrapper" class="col-md-3">
													<?php get_sidebar('sidebar-1'); ?>
												</div>
						        				<div id="post-wrapper" class="col-md-9">
													<?php
														while ( have_posts() ) : the_post();

															get_template_part( 'template-parts/post/content', 'single');

															the_post_navigation(
															    array(
															        'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="bi bi-arrow-left-circle"></i>'. $legacy_book_club_prevarticle .'</span> ' .
																					'<span class="screen-reader-text"> '. $legacy_book_club_prevarticle .' </span> ' .
																					'<h5 class="post-title">%title</h5>',
															        'next_text' => '<span class="meta-nav" aria-hidden="true">'. $legacy_book_club_nextarticle .'</span> ' .
																					'<span class="screen-reader-text">'. $legacy_book_club_nextarticle .'</span><i class="bi bi-arrow-right-circle"></i> ' .
																					'<h5 class="post-title">%title</h5>',
															        'screen_reader_text' => esc_html__('Posts navigation', 'legacy-book-club')
															    )
															);

															// If comments are open or we have at least one comment, load up the comment template.
															if ( comments_open() || get_comments_number() ) :
																comments_template();
															endif;

														endwhile; // End of the loop.
													?>							
												</div>												
			        						<?php
			        					}
			        					else{
			        						?>
			        							<div class="col-md-12">
													<?php
														while ( have_posts() ) : the_post();

															get_template_part( 'template-parts/post/content', 'single');

															the_post_navigation(
															    array(
															        'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="bi bi-arrow-left-circle"></i>'. $legacy_book_club_prevarticle .'</span> ' .
																					'<span class="screen-reader-text"> '. $legacy_book_club_prevarticle .' </span> ' .
																					'<h5 class="post-title">%title</h5>',
															        'next_text' => '<span class="meta-nav" aria-hidden="true">'. $legacy_book_club_nextarticle .'</span> ' .
																					'<span class="screen-reader-text">'. $legacy_book_club_nextarticle .'</span><i class="bi bi-arrow-right-circle"></i> ' .
																					'<h5 class="post-title">%title</h5>',
															        'screen_reader_text' => esc_html__('Posts navigation', 'legacy-book-club')
															    )
															);
															
															// If comments are open or we have at least one comment, load up the comment template.
															if ( comments_open() || get_comments_number() ) :
																comments_template();
															endif;

														endwhile; // End of the loop.
													?>							
												</div>
			        						<?php
			        					}
			        				?>			        				
			        			<?php
			        		}
			        		else {
			        			?>
									<div class="col-md-12">
										<?php
											while ( have_posts() ) : the_post();

												get_template_part( 'template-parts/post/content', 'single');

												the_post_navigation(
												    array(
												        'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="bi bi-arrow-left-circle"></i>'. $legacy_book_club_prevarticle .'</span> ' .
																		'<span class="screen-reader-text"> '. $legacy_book_club_prevarticle .' </span> ' .
																		'<h5 class="post-title">%title</h5>',
												        'next_text' => '<span class="meta-nav" aria-hidden="true">'. $legacy_book_club_nextarticle .'</span> ' .
																		'<span class="screen-reader-text">'. $legacy_book_club_nextarticle .'</span><i class="bi bi-arrow-right-circle"></i> ' .
																		'<h5 class="post-title">%title</h5>',
												        'screen_reader_text' => esc_html__('Posts navigation', 'legacy-book-club')
												    )
												);
												
												// If comments are open or we have at least one comment, load up the comment template.
												if ( comments_open() || get_comments_number() ) :
													comments_template();
												endif;

											endwhile; // End of the loop.
										?>
						            </div>
								<?php
			        		}
			        	?>							
					</div>
				</div>
			</div>
		</div>		
	</main>
</div>

<?php
get_footer();
