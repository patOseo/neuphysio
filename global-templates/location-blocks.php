<div class="locations">
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
</div>