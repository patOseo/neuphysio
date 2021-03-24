<?php $color = get_field('header_background_overlay'); ?>
<style>
.page-header:before {
	background: linear-gradient(<?php if($color) { echo $color . "," . $color; } else { echo('#396fa1, #214e77'); } ?>), url('<?php the_field('header_background'); ?>') no-repeat center center;
    background-color: white;
    background-size: cover;
}
</style>
<div class="page-header">
	<h1><?php the_title(); ?></h1>
</div>

