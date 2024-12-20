<?php
/**
 * The template for displaying the footer.
 *
 * @package Legacy Book Club
 */

?>
	</div>
	<!-- Begin Footer Section -->
	<footer id="footer" class="legacy-book-club-footer" itemscope itemtype="https://schema.org/WPFooter">
		<div class="container footer-widgets">
			<div class="row">
				<div class="footer-widgets-wrapper">
	                <?php get_sidebar( 'footer' ); ?>
	            </div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container copyrights">
				<div class="row">
					<div class="footer-copyrights-wrapper">
						<?php
							/**
							 * Hook - legacy_book_club_action_footer.
							 *
							 * @hooked legacy_book_club_footer_copyrights - 10
							 */
							do_action( 'legacy_book_club_action_footer' );
						?>
					</div>
				</div>
			</div>
		</div>
    </footer>
	<?php wp_footer(); ?>
</body>