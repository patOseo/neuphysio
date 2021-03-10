<?php

// Shortcodes

// Faq
function faq_shortcode() {
        ob_start();
                get_template_part('shortcodes/faq');
        return ob_get_clean();
}
add_shortcode('faq', 'faq_shortcode');

// Staff - Rehab
function staff_rehab_shortcode() {
	ob_start();
		get_template_part('shortcodes/staff-rehab');
	return ob_get_clean();
}
add_shortcode('staff_rehab', 'staff_rehab_shortcode');

// Staff - North
function staff_north_shortcode() {
	ob_start();
		get_template_part('shortcodes/staff-north');
	return ob_get_clean();
}
add_shortcode('staff_north', 'staff_north_shortcode');

// Staff - Neufit
function staff_neufit_shortcode() {
	ob_start();
		get_template_part('shortcodes/staff-neufit');
	return ob_get_clean();
}
add_shortcode('staff_neufit', 'staff_neufit_shortcode');