<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="site-footer" id="colophon">

	<div class="wrapper" id="wrapper-footer">
	
		<div class="<?php echo esc_attr( $container ); ?>">
	
			<div class="row">
	
				<div class="col-md-12">
	
	
						<div class="site-info">
	
							© <?php echo date('Y'); ?> Neuphysio Rehabilitation | All Rights Reserved
	
						</div><!-- .site-info -->
	
	
				</div><!--col end -->
	
			</div><!-- row end -->
	
		</div><!-- container end -->
	
	</div><!-- wrapper end -->

</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

