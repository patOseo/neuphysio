<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<section class="statement">
	<h2><strong>Mission:</strong> A community where people learn to walk and balance again.</h2>
</section>

<div class="home-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Welcome To <img src="/wp-content/themes/neuphysio/images/neuphysio-white.png" alt="Neuphysio"><!-- <span style="color:#bfddfd;font-weight:bold;">Neuphysio</span> --></h1>
				<h2>Neuphysio is a private rehabilitation company that provides physiotherapy services in London ON and surrounding areas.</h2>
				<p>With a focus on trauma, neurological rehabilitation, vestibular rehabilitation and gait and balance training, the staff at Neuphysio offers world-class service and quality of care. Client centered goals are functionally based and aimed at improving mobility, stability and quality of life. We offer clinic, in-home and community-based therapy to persons living with injury or disease.</p>
				<a href="/contact-us/" class="btn btn-secondary btn-lg">Contact Us</a>
			</div>
			<div class="col-md-4">
				<!-- <div class="hours-box">
					<?php while(have_rows('neuphysio_rehab', 'option')): the_row(); $logo = get_sub_field('logo'); ?>
						<?php if($logo): ?> 
							<a href="<?php the_sub_field('link'); ?>"><?php echo wp_get_attachment_image($logo, 'full'); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
					<?php while(have_rows('neuphysio_north', 'option')): the_row(); $logo = get_sub_field('logo'); ?>
						<?php if($logo): ?> 
							<a href="<?php the_sub_field('link'); ?>"><?php echo wp_get_attachment_image($logo, 'full'); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
					<a href="/neufit-training/"><img src="/wp-content/themes/neuphysio/images/neufit-logo.png" alt="Neufit Logo" style="max-width:200px;margin-bottom:0;"></a>
					<!-- <div class="hours-heading"><i class="fa fa-clock-o"></i><span> Office Hours</span></div>
					<hr class="divider">
					<?php if(have_rows('store_hours', 'option')): ?>
						<table>
						<?php while(have_rows('store_hours', 'option')): the_row(); ?>
							<tr>
								<td><?php the_sub_field('day'); ?></td>
								<td><?php the_sub_field('hours'); ?></td>
							</tr>
						<?php endwhile; ?>
						</table>
					<?php endif; ?>

				</div> -->
			</div>
		</div>
	</div>
</div>



<div class="locations">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if(have_rows('neuphysio_rehab', 'option')): ?>
					<?php while(have_rows('neuphysio_rehab', 'option')): the_row(); $logo = get_sub_field('logo'); ?>
						<div class="location-block">
							<?php if($logo): ?> 
								<a href="<?php the_sub_field('link'); ?>"><?php echo wp_get_attachment_image($logo, 'full'); ?></a>
							<?php endif; ?>
							<hr class="divider">
							<?php if(get_sub_field('name')): ?><a href="<?php the_sub_field('link'); ?>"><h2><?php the_sub_field('name'); ?></h2></a><?php endif; ?>
							<?php if(get_sub_field('address')): ?><p><?php the_sub_field('address'); ?></p><?php endif; ?>
							<?php if(get_sub_field('phone_number')): ?><p>Phone: <a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('fax')): ?><p>Fax: <?php the_sub_field('fax'); ?></p><?php endif; ?>
							<?php if(get_sub_field('email')): ?><p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('facebook_link')): ?><a href="<?php the_sub_field('facebook_link'); ?>" target="_blank" rel="noopener,noreferrer,nofollow"><div class="location-social-link"><i class="fa fa-facebook"></i></div></a><?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<?php if(have_rows('neuphysio_north', 'option')): ?>
					<?php while(have_rows('neuphysio_north', 'option')): the_row(); $logo = get_sub_field('logo'); ?>
						<div class="location-block">
							<?php if($logo): ?>
								<a href="<?php the_sub_field('link'); ?>"><?php echo wp_get_attachment_image($logo, 'full'); ?></a>
							<?php endif; ?>
							<hr class="divider">
							<?php if(get_sub_field('name')): ?><h2><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('name'); ?></a></h2><?php endif; ?>
							<?php if(get_sub_field('address')): ?><p><?php the_sub_field('address'); ?></p><?php endif; ?>
							<?php if(get_sub_field('phone_number')): ?><p>Phone: <a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('fax')): ?><p>Fax: <?php the_sub_field('fax'); ?></p><?php endif; ?>
							<?php if(get_sub_field('email')): ?><p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('facebook_link')): ?><a href="<?php the_sub_field('facebook_link'); ?>" target="_blank" rel="noopener,noreferrer,nofollow"><div class="location-social-link"><i class="fa fa-facebook"></i></div></a><?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="/neufit-training/">
					<div class="location-block neufit-block">
						<div class="neufit-info">
							<img src="/wp-content/themes/neuphysio/images/neufit-logo.png" alt="Neufit Logo"><br>
							<p>131 Wharncliffe Rd South, Suite A<br>London, ON N6J 2K4</p>
						</div>
					</div>
				</a>
			</div>

			<div class="col-md-6">
				<a href="/golf/">
					<div class="location-block tgr-block">
						<img src="/wp-content/themes/neuphysio/images/tgr-logo.jpg" alt="Therapeutic Golf Rehabilitation">
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<section class="therapy-services">
	<div class="container">
		<h2><?php the_field('heading'); ?></h2>
		<hr class="short thick blue divider center">
		<?php if(have_rows('services')): ?>
			<div class="row">
			<?php while(have_rows('services')): the_row(); $image = get_sub_field('image'); $link = get_sub_field('link'); ?>

				<div class="col-md-6 col-lg-4">
					<div class="service-box card">
						<?php echo wp_get_attachment_image($image, 'full'); ?>
						<?php if($link): ?><a href="<?php the_sub_field('link'); ?>" class="stretched-link"><?php endif; ?><h3><?php the_sub_field('title'); ?></h3><?php if($link): ?></a><?php endif; ?>
					</div>
				</div>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="who-we-help">
	<div class="container">
		<h2>We Help</h2>
		<hr class="divider short thick blue center">
		<?php if(have_rows('who_we_help')): ?>
		<div class="row">
			<?php while(have_Rows('who_we_help')): the_row(); ?>
			<div class="col-6 col-md-3">
				<div class="help">
					<?php if(get_sub_field('condition_link')): ?><a href="<?php the_sub_field('condition_link'); ?>"><?php endif; ?><h4><?php the_sub_field('name'); ?></h4><?php if(get_sub_field('condition_link')): ?></a><?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php if(have_rows('company_logos', 'option')): ?>
<section class="companies">


			<div class="companies-slider">
			<?php while(have_rows('company_logos', 'option')): the_row(); $logo = get_sub_field('logo'); ?>
				<div class="company-logo">
					<?php if(get_sub_field('website', 'option')): ?><a href="<?php echo the_sub_field('website', 'option'); ?>" target="_blank" rel="noopener,noreferrer,nofollow"><?php endif; echo wp_get_attachment_image($logo, 'full'); ?><?php if(get_sub_field('website', 'option')): ?></a><?php endif; ?>
				</div>
			<?php endwhile; ?>
			</div>


</section>
<?php endif; ?>

<?php get_footer();
