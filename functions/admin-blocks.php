<?php

// Enqueue block CSS for the editor
function custom_blocks_editor_scripts() {
	// Enqueue block editor styles
    wp_enqueue_style(
        'custom-blocks-editor-css',
        get_stylesheet_directory_uri() . '/css/admin-editor.css',
        [ 'wp-edit-blocks' ]
    );
}

// Hook the enqueue functions into the editor
add_action( 'enqueue_block_editor_assets', 'custom_blocks_editor_scripts' );


function acf_custom_blocks() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register divider block
		acf_register_block(array(
			'name'				=> 'divider',
			'title'				=> __('Divider'),
			'description'		=> __('A custom block for a divider'),
			'render_template'	=> 'global-templates/blocks/divider.php',
			'category'			=> 'layout',
			'icon'				=> 'minus',
			'keywords'			=> array( 'divider', 'line' ),
		));

		// accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('A custom block to display a FAQ-style accordion.'),
			'mode'				=> 'edit',
			'render_template'	=> 'global-templates/blocks/block-accordion.php',
			'category'			=> 'oseo-blocks',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'faq', 'accordion' ),
		));
	}
}

add_action('acf/init', 'acf_custom_blocks');