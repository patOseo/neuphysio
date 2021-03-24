<?php
$i = 1;
if(have_rows('staff_members', 'option')): ?>

	<div class="staff-list">
		<?php while(have_rows('staff_members', 'option')): the_row(); ?>
			<?php 
			$location = get_sub_field('location'); 
			$image = get_sub_field('image');
			?>
	
			<?php if(in_array('neufit', $location)): ?>
	
				<div class="staff-member row">
					<div class="col-md-3">
						<?php echo wp_get_attachment_image($image, 'full');  ?>
					</div>
					<div class="col-md-9">
						<h3><?php the_sub_field('name'); ?></h3>
						<p><i><?php the_sub_field('position'); ?></i></p>
						<hr class="divider short">
						<p><?php the_sub_field('short_bio'); ?></p>
						<?php if(get_sub_field('biography')): ?>
							<div class="accordion" id="accordion<?php echo $i; ?>">
								<div class="full-bio">
									<div class="bio-header" id="heading<?php echo $i; ?>">
										<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>">Read Full Bio <i class="fa fa-chevron-down"></i></button>
									</div>
									<div class="collapse" id="collapse<?php echo $i; ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion<?php echo $i; ?>">
										<div class="card-body">
											<?php the_sub_field('biography'); ?>
											<?php if(get_sub_field('video')): ?>
												<div class="embed-container">
											    	<?php the_sub_field('video'); ?>
												</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<hr class="divider thin">
	
			<?php endif; ?>
	
		<?php $i++; endwhile; ?>
	</div>

<?php endif;