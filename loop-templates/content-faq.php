<div class="faq-section">
	<div class="row">
	<?php if(have_rows('faqs')): ?>
	
		<div id="accordion" class="col-12">
			<?php $i = 1; while(have_rows('faqs')): the_row(); ?>
	
				<div class="card">
					<div class="card-header shadowbox hover" id="heading<?php echo $i; ?>">
						<button class="btn stretched-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><i class="fa fa-plus"></i><?php the_sub_field('question'); ?></button>
					</div>
					<div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
						<div class="card-body">
							<?php the_sub_field('answer'); ?>
						</div>
					</div>
				</div>
	
			<?php $i++; endwhile; ?>
		</div>
	
	<?php endif; ?>
	</div>
</div>