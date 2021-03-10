<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if(!get_field('header_background')): ?>
		<header class="entry-header">
	
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php if(is_page_template('page-templates/contact.php')): ?>
		<?php get_template_part('global-templates/location-blocks'); ?>
	<?php endif; ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

		<?php if(is_page(28)): ?>
			<?php get_template_part('loop-templates/content-faq'); ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
