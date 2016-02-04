<?php 
/**
 * Hide editor for specific page templates.
 *
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;

	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
    
    if($template_file == 'template-home.php'){ // edit the template name
    	remove_post_type_support('page', 'editor');
    }
    if($template_file == 'template-columns.php'){ // edit the template name
    	remove_post_type_support('page', 'editor');
    }
    if($template_file == 'template-contact.php'){ // edit the template name
    	remove_post_type_support('page', 'editor');
    }
}
 ?>
