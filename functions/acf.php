<?php 

$staff_settings = array(
	'page_title' => __('Staff'),
	'icon_url' => 'dashicons-businesswoman',
);

$companies_settings = array(
	'page_title' => __('Collaborators'),
	'icon_url' => 'dashicons-screenoptions',
);

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('Global Options');
	acf_add_options_page($staff_settings);
	acf_add_options_page($companies_settings);
}