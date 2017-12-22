<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Yeni_Nostalji_16
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>

		<?php if ( have_rows( 'yeni_show' ) ) : ?>

			<div class="yeni-shows">

				<?php while ( have_rows( 'yeni_show' ) ) : the_row(); ?>

					<div class="yeni-show">
						<h3><?php the_sub_field('date') ?> | <?php the_sub_field('time'); ?></h3>
						<span><?php the_sub_field('description'); ?></span><br>
						<div class="show-links">
							<?php if ( get_sub_field('event_page_link') ) { ?><a href="<?php the_sub_field('event_page_link'); ?>">more info</a><?php } ?>
						</div>
					</div>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
