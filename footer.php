<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Plastic
 */

?>

	</paper-material>

	</div><!-- #content -->

	<paper-material elevation="0" id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'plastic' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'plastic' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'plastic' ), 'plastic', '<a href="http://aristeides.com" rel="designer">Aristeides Stathopoulos</a>' ); ?>
		</div><!-- .site-info -->
	</paper-material><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
