<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<?php if (  get_option('lp_color_scheme') != '' ) { ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-<?php echo get_option('lp_color_scheme'); ?>.css" type="text/css" media="screen" />
<?php } ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/superfish.css" type="text/css" media="screen" /> 

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<!--Superfish nav bar-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/superfish.js"></script>
<!--Slide-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.nivo.slider.js"></script>
<!--cufon-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/Bebas_400.font.js" type="text/javascript"></script>
<!--popup window-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/popup.js" type="text/javascript"></script>
<!--init-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/init.js" type="text/javascript"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/tsp-dropdown-custom.js" type="text/javascript"></script>
<link rel="stylesheet" href="/CCRE/wp-content/plugins/transposh-translation-filter-for-wordpress/widgets/dropdown/tpw_image_dropdown.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/custom.css" type="text/css" media="screen" />
</head>
<body>
	<div id="wrapper">   
    	<div id="main">
        	<div id="header"> 
            	<div id="logo"><a href="<?php echo get_option('home'); ?>" title="Home"><img src="<?php if (get_option('lp_logo')) : echo get_option('lp_logo'); else: bloginfo('stylesheet_directory');?>/img/logo.png<?php endif; ?>" alt="Home" class="logo" /></a></div>
				<div id="navmenu-custom">
				<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array( 'theme_location'=>'secondary', 'menu_id' => 'menu')); } ?>
				</div>
				<div id="header-transposh">
				<?php if(function_exists("transposh_widget")) { 
				transposh_widget(array(), array('widget_file' => 'dropdown/tpw_image_dropdown.php')); 
				}?>
				</div>
				
				<div id="nav">	
					<?php if ( function_exists('wp_nav_menu') ) { 
					 wp_nav_menu( array( 'theme_location'=>'primary', 'menu_class' => 'sf-menu',)); }
					else {?>
					<ul class="sf-menu">
						<?php wp_list_pages('title_li=&sort_column=menu_order&depth=3'); ?>
					</ul>
					<?php } ?>
					<div class="search">
						<?php include(TEMPLATEPATH . '/searchform.php' ); ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<!--header end-->