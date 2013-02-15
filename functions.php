<?php

// Navigation menu
register_nav_menu( 'primary', 'Primary Menu' );

// Featured images
add_theme_support('post-thumbnails');

// Editor style 
add_editor_style();

// Admin style
function my_admin_head() {
	echo '<link rel="stylesheet" type="text/css" href="' .content_url('/themes/handinhand/admin-style.css', __FILE__). '">';
}
add_action('admin_head', 'my_admin_head');


// Custom post types (Gallery and Banner Item)
function create_post_types() {
	register_post_type( 'photos',
		array(
			'labels' => array(
				'name' => __( 'Photo Albums' ),
				'singular_name' => __( 'Photo Album' ),
				'add_new_item' => __( 'Add New Photo Album' ),
				'edit_item' => __( 'Edit Photo Album' ),
				'new_item' => __( 'New Photo Album' ),
				'view_item' => __( 'View Photo Album' ),
				'search_items' => __( 'Search Photo Albums' ),
				'not_found' => __( 'No photo albums found' ),
				'not_found_in_trash' => __( 'No photo albums found in Trash' )
			),
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title','editor','thumbnail'
			)
		)
	);
	register_post_type( 'banner',
		array(
			'labels' => array(
				'name' => __( 'Banner Items' ),
				'singular_name' => __( 'Banner Item' ),
				'add_new_item' => __( 'Add New Banner Item' ),
				'edit_item' => __( 'Edit Banner Item' ),
				'new_item' => __( 'New Banner Item' ),
				'view_item' => __( 'View Banner Item' ),
				'search_items' => __( 'Search Banner Items' ),
				'not_found' => __( 'No banner items found' ),
				'not_found_in_trash' => __( 'No banner items found in Trash' )
			),
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title','editor','thumbnail','custom-fields'
			)
		)
	);
	flush_rewrite_rules(); 
}
add_action( 'init', 'create_post_types' );


/* ------ Remove a few admin pages ----- */

	function remove_admin() {
		remove_menu_page('link-manager.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
		remove_menu_page('profile.php');
		remove_submenu_page('edit.php', 'edit-tags.php');
		remove_submenu_page( 'themes.php', 'widgets.php' );
	}
	add_action('admin_menu', 'remove_admin');


// Admin footer

add_filter('admin_footer_text', 'left_admin_footer_text_output'); //left side
function left_admin_footer_text_output($text) {
    $text = 'Site developed by <a href="http://parsleyandsprouts.com" target="_blank">Parsley &amp Sprouts</a>.';
    return $text;
}
 
add_filter('update_footer', 'right_admin_footer_text_output', 11); //right side
function right_admin_footer_text_output($text) {
    $text = '&copy 2012.';
    return $text;
}

/* ------ Sidebar gallery options --------- */

function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('right-sidebar', content_url().'/themes/handinhand/js/right-sidebar.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('right-sidebar');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');



// ------- Custom right sidebar images ----------//

$prefix = 'hh_';
$images_url = content_url().'/themes/handinhand/images';
     
$meta_box = array(
    'id' => 'right-sidebar',
    'title' => 'Right Sidebar Images',
    'context' => 'normal',
    'fields' => array(
    	array(
    		'name' => '',
    		'id' => $prefix . 'image1',
    		'type' => 'text',
    		'std' => $images_url.'/right1.png'
    		),
    	array(
    		'name' => 'upload_image2',
    		'id' => $prefix . 'image2',
    		'type' => 'text',
    		'std' => $images_url.'/right2.png'
    	),
		array(
    		'name' => 'upload_image3',
    		'id' => $prefix . 'image3',
    		'type' => 'text',
    		'std' => $images_url.'/right3.png'
    	),
		array(
    		'name' => 'upload_image4',
    		'id' => $prefix . 'image4',
    		'type' => 'text'
    	),
		array(
    		'name' => 'upload_image5',
    		'id' => $prefix . 'image5',
    		'type' => 'text'
    	),
		array(
    		'name' => 'upload_image6',
    		'id' => $prefix . 'image6',
    		'type' => 'text'
    	),
		array(
    		'name' => 'upload_image7',
    		'id' => $prefix . 'image7',
    		'type' => 'text'
    	),
		array(
    		'name' => 'upload_image8',
    		'id' => $prefix . 'image8',
    		'type' => 'text'
    	),
    ),
);
add_action('admin_menu', 'handinhand_add_box');
     
// Add meta box
function handinhand_add_box() {
    global $meta_box;
     
    add_meta_box($meta_box['id'], $meta_box['title'], 'handinhand_show_box', 'post', $meta_box['context']);
	add_meta_box($meta_box['id'], $meta_box['title'], 'handinhand_show_box', 'page', $meta_box['context']);
}
	
// Callback function to show fields in meta box
function handinhand_show_box() {
    global $meta_box, $post;
     
    // Use nonce for verification
    echo '<input type="hidden" name="handinhand_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';     
    echo '<table>';
     
    foreach ($meta_box['fields'] as $field) {
    // get current post meta data
    $meta = get_post_meta($post->ID, $field['id'], true);
     
    echo '<tr>',
    '<td>';
    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="36" />', '<br />';
    echo '</td>',
    '</tr>';
    }
     
    echo '</table>';
    }
	
	add_action('save_post', 'handinhand_save_data');
     
    // Save data from meta box
    function handinhand_save_data($post_id) {
    global $meta_box;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['handinhand_meta_box_nonce'], basename(__FILE__))) {
    return $post_id;
    }
     
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
    }
     
    // check permissions
    
	if ('page' == $_POST['post_type'] ) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
    } elseif (!current_user_can('edit_post', $post_id)) {
    	return $post_id;
    }
	
     
    foreach ($meta_box['fields'] as $field) {
    $old = get_post_meta($post_id, $field['id'], true);
    $new = $_POST[$field['id']];
     
    if ($new && $new != $old) {
    update_post_meta($post_id, $field['id'], $new);
    } elseif ('' == $new && $old) {
    delete_post_meta($post_id, $field['id'], $old);
    }
    }
    }

// Custom login screen

function my_login_head() {
	echo "<link rel='stylesheet' href='".get_bloginfo('template_url')."/login-style.css' type='text/css'>";
}
add_action('login_head', 'my_login_head');

function loginpage_custom_link() {
	return 'http://handinhandforliteracy.org';
}
add_filter('login_headerurl','loginpage_custom_link');

function change_title_on_logo() {
	return 'Hand in Hand for Literacy';
}
add_filter('login_headertitle', 'change_title_on_logo');


// Editor can edit menu

function give_user_edit() {
	if(current_user_can('edit_others_posts')) {
		global $wp_roles;
		$wp_roles->add_cap('editor','edit_theme_options' );
	}
}
add_action('admin_init', 'give_user_edit', 10, 0);
?>