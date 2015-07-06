<?php
/**
 * Template part for displaying posts.
 *
 * @package Plastic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'plastic' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
