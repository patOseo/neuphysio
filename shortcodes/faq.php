<?php
$i = 1;

if(have_rows('faqs')): ?>
	
	<div id="faqSection">
	<?php while(have_rows('faqs')): the_row(); ?>
	
		<div class="card">
			<div class="card-header" id="faqHeading<?php echo $i; ?>">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse(<php echo $i; ?>"><h5 class="mb-0"><?php the_sub_field('question'); ?></h5></button>
			</div>
			<div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="faqHeading<?php echo $i; ?>" data-parent="#faqSection">
				<div class="card-body">
					<p><?php the_sub_field('answer'); ?></p>
				</div>
			</div>
		</div>	

<?php $i++; endwhile; ?>
	</div>

<?php endif; ?>