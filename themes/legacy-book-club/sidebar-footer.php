<?php
/**
 * @package Legacy Book Club
 */

//Return if the first widget area has no widgets
if ( !is_active_sidebar( 'footer-1' ) ) {
	return;
} ?>

<?php //user selected widget columns

	$legacy_book_club_widget_num = esc_html(get_theme_mod('legacy_book_club_footer_widgets', '4'));
	
	if ($legacy_book_club_widget_num == '4') :
		$legacy_book_club_col1 ='col-md-3';
		$legacy_book_club_col2 ='col-md-3';
		$legacy_book_club_col3 ='col-md-3';
		$legacy_book_club_col4 ='col-md-3';
	elseif ($legacy_book_club_widget_num == '3') :
		$legacy_book_club_col1 ='col-md-4';
		$legacy_book_club_col2 ='col-md-4';
		$legacy_book_club_col3 ='col-md-4';
		
	elseif ($legacy_book_club_widget_num == '2') :
		 $legacy_book_club_col1 ='col-md-6';
		 $legacy_book_club_col2 ='col-md-6';
	else :
		$legacy_book_club_col1 ='col-md-12';
	endif;
?>
		
<?php 
	if ( is_active_sidebar( 'footer-1' ) && ( $legacy_book_club_widget_num == '4' || $legacy_book_club_widget_num == '3' || $legacy_book_club_widget_num == '2' || $legacy_book_club_widget_num == '1')) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($legacy_book_club_col1); ?>">
				<?php dynamic_sidebar( 'footer-1'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-2' ) && ( $legacy_book_club_widget_num == '4' || $legacy_book_club_widget_num == '3' || $legacy_book_club_widget_num == '2')) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($legacy_book_club_col2); ?>">
				<?php dynamic_sidebar( 'footer-2'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-3' ) && ( $legacy_book_club_widget_num == '4' || $legacy_book_club_widget_num == '3' )) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($legacy_book_club_col3); ?>">
				<?php dynamic_sidebar( 'footer-3'); ?>
			</div>
		<?php
	endif;
	if ( is_active_sidebar( 'footer-4' ) && ( $legacy_book_club_widget_num == '4' )) :
		?>
			<div class="widget-column px-3 <?php echo esc_attr($legacy_book_club_col4); ?>">
				<?php dynamic_sidebar( 'footer-4'); ?>
			</div>
		<?php
	endif;
?>