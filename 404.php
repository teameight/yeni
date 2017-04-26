<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yeni_Nostalji_16
 */

get_header(); ?>

	<?php
	the_post();
	$home_page = get_page_by_title( 'Home' );
	$image = get_the_post_thumbnail_url( $home_page, 'full' ); ?>


			<div class="none-content">

				<div class="none-overlay">
					<div class="none-overlay-container">
						<span class="none-oops tk-adelle">oops!</span>
						<span class="none-404 gibson">404: Page not found</span>
						<span class="none-please gibson">Please try a selection from the menu</span>
					</div>
				</div>

				<div class="bg-still" style="background-image: url(<?php echo $image; ?>);"></div>

			</div>

<?php
get_sidebar();
get_footer();
