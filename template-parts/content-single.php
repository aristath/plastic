<?php
/**
 * Template part for displaying single posts.
 *
 * @package Plastic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plastic' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php plastic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
