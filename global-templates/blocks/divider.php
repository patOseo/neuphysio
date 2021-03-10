<?php 
$length = get_field('length');
$width = get_field('width');
$color = get_field('color');
$align = get_field('alignment');
?>
<hr class="divider <?php if($length): echo $length . " "; endif; if($width): echo $width . " "; endif; if($color): echo $color . " "; endif; if($align): echo $align . " "; endif; ?>">