<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '<div class="sidebaritem">',
'after_widget' => '</div><div class="divider"></div>',
'before_title' => '<h3 class="replace">',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'HomeSidebar',
'before_widget' => '<div class="sidebaritem">',
'after_widget' => '</div><div class="divider"></div>',
'before_title' => '<h3 class="replace">',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Footer',
'before_widget' => '<div class="footer-col left">',
'after_widget' => '</div>',
'before_title' => '<h6>',
'after_title' => '</h6>',
));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 150, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size


if ( !is_admin() ) {
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js', false);
   wp_enqueue_script('jquery');
}


// custom 'read more' link
function excerpt_ellipse($text) {
    return str_replace(' [...]', ' &nbsp;<a href="'.get_permalink().'">Read more</a>', $text);
}
add_filter('the_excerpt', 'excerpt_ellipse');

// WP3 menu
if (function_exists('nav-menus')) {
          add_theme_support('nav-menus');
      }
register_nav_menus(array('primary'=>_('Primary Menu'),
	'secondary'=>_('Secondary Menu'),));
?>
<?php

$themename = "LightofPeace";
$shortname = "lp";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category"); 



$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 
// General Options
array( "name" => "General",
	"type" => "section"),
array( "type" => "open"),
 
array( "name" => "Colour Scheme",
	"desc" => "Select theme colour scheme. Leave it blank for default scheme.",
	"id" => $shortname."_color_scheme",
	"type" => "select",
	"options" => array("", "red", "orange", "blue"),
	"std" => ""),
array( "name" => "Custom logo image",
	"desc" => "Enter the URL of your custom logo. e.g. 'http://yourwebsite.com/logo.png' Maximum height 40px ",
	"id" => $shortname."_logo",
	"type" => "text",
	"std" => ""),

array( "type" => "close"),
// Homepage Options	
array( "name" => "Homepage",
	"type" => "section"),
array( "type" => "open"),

array( "name" => "Slide 1 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_1",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 1 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_1",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 1 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_1",
	"type" => "text",
	"std" => ""),	
array( "name" => "Slide 2 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_2",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 2 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_2",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 2 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_2",
	"type" => "text",
	"std" => ""),	
array( "name" => "Slide 3 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_3",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 3 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_3",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 3 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_3",
	"type" => "text",
	"std" => ""),	
array( "name" => "Slide 4 - Image location",
	"desc" => "Enter the URL for this slide (640x280px).",
	"id" => $shortname."_slide_img_4",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 4 - Destination",
	"desc" => "Enter the URL where this slide links to.",
	"id" => $shortname."_slide_link_4",
	"type" => "text",
	"std" => ""),
array( "name" => "Slide 4 - Caption",
	"desc" => "Enter the caption for this slide.",
	"id" => $shortname."_slide_capt_4",
	"type" => "text",
	"std" => ""),
array( "name" => "Show Latest Posts",
	"desc" => "Check to show the latest posts. It will replace the tabs",
	"id" => $shortname."_latest_posts",
	"type" => "checkbox",
	"std" => ""),
array( "name" => "Number of posts",
	"desc" => "Number of posts will be shown if the Tab is unchecked",
	"id" => $shortname."_post_num",
	"type" => "text",
	"std" => ""),
array( "name" => "Tab #1 category",
	"desc" => "Posts from this category will be shown on the Tab 1",
	"id" => $shortname."_tab_cat_1",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),
array( "name" => "Tab #2 category",
	"desc" => "Posts from this category will be shown on the Tab 2",
	"id" => $shortname."_tab_cat_2",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),
array( "name" => "Tab #3 category",
	"desc" => "Posts from this category will be shown on the Tab 3",
	"id" => $shortname."_tab_cat_3",
	"type" => "select",
	"options" => $wp_cats,
	"std" => "Choose a category"),



array( "type" => "close"),

// Sidebar Options	
array( "name" => "Sidebar",
	"type" => "section"),
array( "type" => "open"),
	
array( "name" => "Headline Box - Title text",
	"desc" => "Enter title text to be displayed in the Headline Box.",
	"id" => $shortname."_hlbox_title",
	"type" => "text",
	"std" => ""),

array( "name" => "Headline Box - Body Text",
	"desc" => "Enter body text to be displayed in the Headline Box. It can be HTML",
	"id" => $shortname."_hlbox_text",
	"type" => "textarea",
	"std" => ""),
array( "type" => "close"),


// Footer Options	
array( "name" => "Footer",
	"type" => "section"),
array( "type" => "open"),
array( "name" => "Footer logo image",
	"desc" => "Enter the URL of your custom logo. e.g. 'http://yourwebsite.com/logo.png'. Maximum width: 300px. ",
	"id" => $shortname."_logo_footer",
	"type" => "text",
	"std" => ""),	
array( "name" => "Footer text",
	"desc" => "Enter text used in the right side of the footer. It can be HTML",
	"id" => $shortname."_footer_text",
	"type" => "textarea",
	"std" => ""),	
array( "name" => "Google Analytics Code",
	"desc" => "Enter Google Analytics or other tracking code here",
	"id" => $shortname."_tracking_code",
	"type" => "textarea",
	"std" => ""),	
array( "type" => "close")
 
);





function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
 
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
 
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
	header("Location: admin.php?page=functions.php&saved=true");
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=functions.php&reset=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");

}


function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap pt_wrap">
<h2><?php echo $themename; ?> Settings</h2>
 
<div class="pt_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>

 
<?php break;
 
case 'text':
?>

<div class="pt_input pt_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="pt_input pt_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="pt_input pt_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="pt_input pt_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="pt_section">
<div class="pt_title"><h3><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="pt_options">

 
<?php break;
 
}
}
?>


<p>Need help? Post your questions <a href="http://themeforest.net/item/light-of-peace-wordpress-template/discussion/120416">here</a>.</p>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div> 
 

<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
<?php 
function add_theme_favicon() { ?>
	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/favicon.ico" />
<?php }
add_action('wp_head', 'add_theme_favicon');
?>