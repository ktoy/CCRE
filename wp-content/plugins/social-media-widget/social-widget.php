<?php
/**
 * Plugin Name: Social Media Widget
 * Plugin URI: http://www.idontlikethisgame.com/updates/social-media-widget/
 * Description: Adds links to all of your social media and sharing site profiles. Icons come in 3 sizes, 4 icon styles, and 4 animations.
 * Version: 2.2.1
 * Author: Brian Freytag
 * Author URI: http://www.idontlikethisgame.com/
 **/




/* Function for CSS */

function Social_Widget_Scripts(){	
	$social_widget_path = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)); 
?>
<link rel="stylesheet" type="text/css" href="<?php echo $social_widget_path; ?>social_widget.css" />
<?php } 


/* Register the widget */
function socialwidget_load_widgets() {
	register_widget( 'Social_Widget' );
}

/* Begin Widget Class */
class Social_Widget extends WP_Widget {

	/* Widget setup  */
	function Social_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Social_Widget', 'description' => __('A widget that allows the user to display social media icons in their sidebar', 'smw') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 600, 'height' => 350, 'id_base' => 'social-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'social-widget', __('Social Media Widget', 'smw'), $widget_ops, $control_ops );
	}

	/* Display the widget  */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];		
		$twitter = $instance['twitter'];
		$myspace = $instance['myspace'];
		$friendfeed = $instance['friendfeed'];
		$orkut = $instance['orkut'];
		$linkedin = $instance['linkedin'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$skype = $instance['skype'];
		$digg = $instance['digg'];
		$reddit = $instance['reddit'];
		$delicious = $instance['delicious'];
		$stumble = $instance['stumble'];
		$buzz = $instance['buzz'];
		$vimeo = $instance['vimeo'];
		$blogger = $instance['blogger'];
		$wordpress = $instance['wordpress'];
		$yelp = $instance['yelp'];
		$lastfm = $instance['lastfm'];
		$foursquare = $instance['foursquare'];
		$meetup = $instance['meetup'];
		$rss = $instance['rss_url'];
		$subscribe = $instance['subscribe'];
		$icon_size = $instance['icon_size'];
		$icon_pack = $instance['icon_pack'];
		$animation = $instance['animation'];
		$icon_opacity = $instance['icon_opacity'];
		$newtab = $instance['newtab'];
		$nofollow = $instance['nofollow'];
		
		/* Choose Icon Size if Value is 'default' */
		if($icon_size == 'default') {
			$icon_size = '32';
		}
		
		/* Choose icon opacity if Value is 'default' */
		if($icon_opacity == 'default') {
			$icon_opacity = '0.8';
		}
		
		/* Need to make opacity a whole number for IE styling filter() */
		$icon_ie = $icon_opacity * 100;
		
		/* Check to see if nofollow is set or not */
		if ($nofollow == 'on') {
			$nofollow = "rel=\"nofollow\"";
			} else {
			$nofollow = '';
			}
		
		/* Check to see if New Tab is set to yes */
		if ($newtab == 'yes') {
			$newtab = "target=\"_blank\"";
			} else {
			$newtab = '';
			}
			
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
		
		echo "<div class=\"socialmedia-buttons\">";
		/* Display linked images to profiles from widget settings if one was input. */
		
		// Facebook
		if ( $facebook != '') {
			?> <a href="<?php echo $facebook; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>> <img src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/facebook.png" alt="<?php echo $title; ?> on Facebook" title="<?php echo $title; ?> on Facebook" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php 
		} else {
			echo ''; //If no URL inputed
		}
		
		// Twitter
		if ( $twitter != '' ) {
			?> <a href="<?php echo $twitter; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/twitter.png"  alt="<?php echo $title; ?> on Twitter" title="<?php echo $title; ?> on Twitter" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}

		
		// MySpace
		if ( $myspace != '' ) {
			?><a href="<?php echo $myspace; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/myspace.png" alt="<?php echo $title; ?> on MySpace" title="<?php echo $title; ?> on MySpace" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// FriendFeed
		if ( $friendfeed != '' ) {
			?><a href="<?php echo $friendfeed; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/friendfeed.png" alt="<?php echo $title; ?> on FriendFeed" title="<?php echo $title; ?> on FriendFeed" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>"" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// Orkut
		if ( $orkut != '' ) {
			?><a href="<?php echo $orkut; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/orkut.png" alt="<?php echo $title; ?> on Orkut" title="<?php echo $title; ?> on Orkut" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// LinkedIN
		if ( $linkedin != '' ) {
			?><a href="<?php echo $linkedin; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/linkedin.png" alt="<?php echo $title; ?> on LinkedIn" title="<?php echo $title; ?> on LinkedIn" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// Flickr
		if ( $flickr != '' ) {
			?><a href="<?php echo $flickr; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/flickr.png" alt="<?php echo $title; ?> on Flickr" title="<?php echo $title; ?> on Flickr" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// YouTube
		if ( $youtube != '' ) {
			?><a href="<?php echo $youtube; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/youtube.png" alt="<?php echo $title; ?> on YouTube" title="<?php echo $title; ?> on YouTube" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If No URL Inputed
		}
		
		// Skype
		if ( $skype != '' ) {
			?><a href="<?php echo $skype; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/skype.png" alt="<?php echo $title; ?> on Skype" title="<?php echo $title; ?> on Skype" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If No URL Inputed
		}
		
		// Digg
		if ( $digg != '' ) {
			?><a href="<?php echo $digg; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/digg.png" alt="<?php echo $title; ?> on Digg" title="<?php echo $title; ?> on Digg" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Reddit 
		if ( $reddit != '' ) {
			?><a href="<?php echo $reddit; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/reddit.png" alt="<?php echo $title; ?> on Reddit" title="<?php echo $title; ?> on Reddit" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Delicious 
		if ( $delicious != '' ) {
			?><a href="<?php echo $delicious; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/delicious.png" alt="<?php echo $title; ?> on Delicious" title="<?php echo $title; ?> on Delicious" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// StumbleUpon 
		if ( $stumble != '' ) {
			?><a href="<?php echo $stumble; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/stumble.png" alt="<?php echo $title; ?> on StumbleUpon" title="<?php echo $title; ?> on StumbleUpon" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Google Buzz
		if ( $buzz != '' ) {
			?><a href="<?php echo $buzz; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/buzz.png" alt="<?php echo $title; ?> on Buzz" title="<?php echo $title; ?> on Buzz" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Vimeo
		if ( $vimeo != '' ) {
			?><a href="<?php echo $vimeo; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/vimeo.png" alt="<?php echo $title; ?> on Vimeo" title="<?php echo $title; ?> on Vimeo" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Blogger
		if ( $blogger != '' ) {
			?><a href="<?php echo $blogger; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/blogger.png" alt="<?php echo $title; ?> on Blogger" title="<?php echo $title; ?> on Blogger" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If No URL Inputed
		}
		
		// Wordpress
		if ( $wordpress != '' ) {
			?><a href="<?php echo $wordpress; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/wordpress.png" alt="<?php echo $title; ?> on Wordpress" title="<?php echo $title; ?> on Wordpress" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If No URL Inputed
		}
		
		// Wordpress
		if ( $yelp != '' ) {
			?><a href="<?php echo $yelp; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/yelp.png" alt="<?php echo $title; ?> on Yelp" title="<?php echo $title; ?> on Yelp" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If No URL Inputed
		}

		// Last.fm
		if ( $lastfm != '' ) {
			?><a href="<?php echo $lastfm; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/lastfm.png" alt="<?php echo $title; ?> on Last.fm" title="<?php echo $title; ?> on Last.fm" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Foursquare
		if ( $foursquare != '' ) {
			?><a href="<?php echo $foursquare; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/foursquare.png" alt="<?php echo $title; ?> on Foursquare" title="<?php echo $title; ?> on Foursquare" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Meetup
		if ( $meetup != '' ) {
			?><a href="<?php echo $meetup; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/meetup.png" alt="<?php echo $title; ?> on Meetup" title="<?php echo $title; ?> on Meetup" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// RSS
		if ( $rss != '') {
			?><a href="<?php echo $rss; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/rss.png" alt="<?php echo $title ?> via RSS" title="<?php echo $title ?> via RSS" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo '';// If no URL Inputed
		}
		
		// E-mail Subscription -- If Newsletter or Mailing List available
		if ( $subscribe != '' ) {
			?><a href="<?php echo $subscribe; ?>" <?php echo $nofollow; ?> <?php echo $newtab; ?>><img  src="<?php echo WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));  ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/email.png" alt="<?php echo $title ?> via E-mail" title="<?php echo $title ?> via E-mail" <?php if($animation == 'fade' || $animation == 'combo') { ?> style="opacity: <?php echo $icon_opacity; ?>; -moz-opacity: <?php echo $icon_opacity;?>;" <?php } ?>class="<?php echo $animation; ?>" /></a><?php
		} else {
			echo ''; // If no URL Inputed
		}
		
		/* After widget (defined by themes). */
		echo "</div>";
		
		echo $after_widget;
	}

	/* Update the widget settings  */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip Tags For Text Boxes */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['myspace'] = strip_tags( $new_instance['myspace'] );
		$instance['friendfeed'] = strip_tags( $new_instance['friendfeed'] );
		$instance['orkut'] = strip_tags( $new_instance['orkut'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['flickr'] = strip_tags( $new_instance['flickr'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['skype'] = strip_tags( $new_instance['skype'] );
		$instance['digg'] = strip_tags( $new_instance['digg'] );
		$instance['reddit'] = strip_tags( $new_instance['reddit'] );
		$instance['delicious'] = strip_tags( $new_instance['delicious'] );
		$instance['stumble'] = strip_tags( $new_instance['stumble'] );
		$instance['buzz'] = strip_tags( $new_instance['buzz'] );
		$instance['vimeo'] = strip_tags( $new_instance['vimeo'] );
		$instance['blogger'] = strip_tags( $new_instance['blogger'] );
		$instance['wordpress'] = strip_tags( $new_instance['wordpress'] );
		$instance['yelp'] = strip_tags( $new_instance['yelp'] );
		$instance['lastfm'] = strip_tags( $new_instance['lastfm'] );
		$instance['foursquare'] = strip_tags( $new_instance['foursquare'] );
		$instance['meetup'] = strip_tags( $new_instance['meetup'] );
		$instance['rss_url'] = strip_tags( $new_instance['rss_url'] );
		$instance['subscribe'] = strip_tags( $new_instance['subscribe'] );
		$instance['icon_size'] = $new_instance['icon_size'];
		$instance['icon_pack'] = $new_instance['icon_pack'];
		$instance['animation'] = $new_instance['animation'];
		$instance['icon_opacity'] = $new_instance['icon_opacity'];
		$instance['newtab'] = $new_instance['newtab'];
		$instance['nofollow'] = $new_instance['nofollow'];
		
		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
			'title' => __('Follow Us!', 'test'), 
			'facebook' => __('http://www.facebook.com/your_name', 'smw'), 
			'twitter' => __('http://www.twitter.com/yourname', 'smw'),
			'myspace' => __('http://www.myspace.com/yourname', 'smw'),
			'friendfeed' => __('http://www.friendfeed.com/yourname', 'smw'),
			'orkut' => __('http://www.orkut.com/Main#Profile?uid=youruid', 'smw'),
			'linkedin' => __('http://www.linkedin.com/in/yourname', 'smw'),
			'flickr' => __('http://www.flickr.com/photos/yourname', 'smw'),
			'youtube' => __('http://www.youtube.com/user/yourname', 'smw'),
			'skype' => __('skype:yourusername?add', 'smw'),
			'digg' => __('http://www.digg.com/users/yourname', 'smw'),
			'reddit' => __('http://www.reddit.com/user/yourname', 'smw'),
			'delicious' => __('http://delicious.com/yourname', 'smw'),
			'stumble' => __('http://www.stumbleupon.com/stumbler/yourname', 'smw'),
			'buzz' => __('http://www.google.com/profiles/yourname#buzz', 'smw'),
			'vimeo' => __('http://www.vimeo.com/yourname', 'smw'),
			'blogger' => __('http://www.blogger.com/profile/youridnumber', 'smw'),
			'wordpress' => __('http://en.gravatar.com/yourname', 'smw'),
			'yelp' => __('http://yourname.yelp.com', 'smw'),
			'lastfm' => __('http://www.last.fm/user/yourname', 'smw'),
			'foursquare' => __('http://foursquare.com/user/yourname', 'smw'),
			'meetup' => __('http://www.meetup.com/your-group', 'smw'),
			'rss_url' => __('http://www.yoursite.com/feed', 'smw'),
			'icon_size' => 'default',
			'icon_pack' => 'default',
			'icon_opacity' => 'default',
			'newtab' => 'yes',
			'nofollow' => 'on');
			
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
		<em>Note: Make sure you include FULL URL (i.e. http://www.example.com)</em><br />
		If you do not want an icon to be visible, simply delete the supplied URL and leave the input blox blank.
		</p>
		<!-- Widget Title: Text Input -->
		<div style="width:48%; float: left;">
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:85%;" />
		</p>

		<!-- Facebook URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:85%;" />
		</p>
		
		<!-- Twitter URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:85%;" />
		</p>

		<!-- MySpace URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'myspace' ); ?>"><?php _e('MySpace URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'myspace' ); ?>" name="<?php echo $this->get_field_name( 'myspace' ); ?>" value="<?php echo $instance['myspace']; ?>" style="width:85%;" />
		</p>
		
		<!-- FriendFeed URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'friendfeed' ); ?>"><?php _e('FriendFeed URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'friendfeed' ); ?>" name="<?php echo $this->get_field_name( 'friendfeed' ); ?>" value="<?php echo $instance['friendfeed']; ?>" style="width:85%;" />
		</p>

		<!-- Orkut URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'orkut' ); ?>"><?php _e('Orkut URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'orkut' ); ?>" name="<?php echo $this->get_field_name( 'orkut' ); ?>" value="<?php echo $instance['orkut']; ?>" style="width:85%;" />
		</p>
		
		<!-- LinkedIn URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('LinkedIn URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:85%;" />
		</p>
		
		<!-- Flickr URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:85%;" />
		</p>
		
		<!-- YouTube URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('YouTube URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:85%;" />
		</p>
		
		<!-- YouTube URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:85%;" />
		</p>
		
		<!-- Digg URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'digg' ); ?>"><?php _e('Digg URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'digg' ); ?>" name="<?php echo $this->get_field_name( 'digg' ); ?>" value="<?php echo $instance['digg']; ?>" style="width:85%;" />
		</p>
 		
		<!-- Reddit URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php _e('Reddit URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'reddit' ); ?>" name="<?php echo $this->get_field_name( 'reddit' ); ?>" value="<?php echo $instance['reddit']; ?>" style="width:85%;" />
		</p>
		
		<!-- Delicious URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'delicious' ); ?>"><?php _e('Delicious URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'delicious' ); ?>" name="<?php echo $this->get_field_name( 'delicious' ); ?>" value="<?php echo $instance['delicious']; ?>" style="width:85%;" />
		</p>

		<!-- StumpleUpon URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'stumble' ); ?>"><?php _e('StumbleUpon URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'stumble' ); ?>" name="<?php echo $this->get_field_name( 'stumble' ); ?>" value="<?php echo $instance['stumble']; ?>" style="width:85%;" />
		</p>
		</div>
		<div style="width: 48%; float: right; border-left: 1px solid #000; padding-left: 20px;">
		<!-- Buzz URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'buzz' ); ?>"><?php _e('Buzz URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'buzz' ); ?>" name="<?php echo $this->get_field_name( 'buzz' ); ?>" value="<?php echo $instance['buzz']; ?>" style="width:85%;" />
		</p>
		
				
		<!-- Vimeo URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:85%;" />
		</p>
		
		<!-- Blogger URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'blogger' ); ?>"><?php _e('Blogger URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'blogger' ); ?>" name="<?php echo $this->get_field_name( 'blogger' ); ?>" value="<?php echo $instance['blogger']; ?>" style="width:85%;" />
		</p>
		
		<!-- Wordpress URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress(Gravatar) URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:85%;" />
		</p>
		
		<!-- Yelp URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'yelp' ); ?>"><?php _e('Yelp URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'yelp' ); ?>" name="<?php echo $this->get_field_name( 'yelp' ); ?>" value="<?php echo $instance['yelp']; ?>" style="width:85%;" />
		</p>
		
		<!-- Last.fm URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'lastfm' ); ?>"><?php _e('Last.fm URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'lastfm' ); ?>" name="<?php echo $this->get_field_name( 'lastfm' ); ?>" value="<?php echo $instance['lastfm']; ?>" style="width:85%;" />
		</p>
		
		<!-- Foursquare URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'foursquare' ); ?>"><?php _e('Foursquare URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'foursquare' ); ?>" name="<?php echo $this->get_field_name( 'foursquare' ); ?>" value="<?php echo $instance['foursquare']; ?>" style="width:85%;" />
		</p>
		
		<!-- Meetup URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'meetup' ); ?>"><?php _e('Meetup URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'meetup' ); ?>" name="<?php echo $this->get_field_name( 'meetup' ); ?>" value="<?php echo $instance['meetup']; ?>" style="width:85%;" />
		</p>
		
		<!-- RSS URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'rss_url' ); ?>"><?php _e('RSS URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'rss_url' ); ?>" name="<?php echo $this->get_field_name( 'rss_url' ); ?>" value="<?php echo $instance['rss_url']; ?>" style="width:85%;" />
		</p>
		
		
		<!-- Subscribe URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'subscribe' ); ?>"><?php _e('Subscription URL:', 'smw'); ?></label>
			<input id="<?php echo $this->get_field_id( 'subscribe' ); ?>" name="<?php echo $this->get_field_name( 'subscribe' ); ?>" value="<?php echo $instance['subscribe'] ?>" style="width:85%;" />
		</p>
		
	 <!-- Choose Icon Size: Dropdown -->
	
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_size' ); ?>"><?php _e('Icon Size', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_size' ); ?>" name="<?php echo $this->get_field_name( 'icon_size' ); ?>">
			<option value="16" <?php if($instance['icon_size'] == '16') { echo 'selected'; } ?>>16px</option>
			<option value="default" <?php if($instance['icon_size'] == 'default') { echo 'selected'; } ?>>Default (32px)</option>
			<option value="64" <?php if($instance['icon_size'] == '64') { echo 'selected'; } ?>>64px</option>
			</select>
		</p>
		
	<!-- Choose Icon Pack: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_pack' ); ?>"><?php _e('Icon Pack', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_pack' ); ?>" name="<?php echo $this->get_field_name( 'icon_pack' ); ?>">
			<option value="cutout" <?php if($instance['icon_pack'] == 'cutout') { echo 'selected'; } ?>>Cutout Icons</option>
			<option value="heart" <?php if($instance['icon_pack'] == 'heart') { echo 'selected'; } ?>>Heart Icons</option>
			<option value="default" <?php if($instance['icon_pack'] == 'default') { echo 'selected'; } ?>>Default Icons (Web2.0)</option>
			<option value="sketch" <?php if($instance['icon_pack'] == 'sketch') { echo 'selected'; } ?>>Sketch Icons</option>
			</select>
		</p>
		
	<!-- Type of Animation: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'animation' ); ?>"><?php _e('Type of Animation', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'animation' ); ?>" name="<?php echo $this->get_field_name( 'animation' ); ?>">
			<option value="fade" <?php if($instance['animation'] == 'fade') { echo 'selected'; } ?>>Fade In</option>
			<option value="scale" <?php if($instance['animation'] == 'scale') { echo 'selected'; } ?>>Scale</option>
			<option value="bounce" <?php if($instance['animation'] == 'bounce') { echo 'selected'; } ?>>Bounce</option>
			<option value="combo" <?php if($instance['animation'] == 'combo') { echo 'selected'; } ?>>Combo</option>
			</select>
		</p>
		
	<!--Starting Icon Opacity: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_opacity' ); ?>"><?php _e('Default Icon Opacity', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_opacity' ); ?>" name="<?php echo $this->get_field_name( 'icon_opacity' ); ?>">
			<option value="0.5" <?php if($instance['icon_opacity'] == '0.5') { echo 'selected'; } ?>>50%</option>
			<option value="0.6" <?php if($instance['icon_opacity'] == '0.6') { echo 'selected'; } ?>>60%</option>
			<option value="0.7" <?php if($instance['icon_opacity'] == '0.7') { echo 'selected'; } ?>>70%</option>
			<option value="default" <?php if($instance['icon_opacity'] == 'default') { echo 'selected'; } ?>>Default (80%)</option>
			<option value="0.9" <?php if($instance['icon_opacity'] == '0.9') { echo 'selected'; } ?>>90%</option>
			<option value="1" <?php if($instance['icon_opacity'] == '1') { echo 'selected'; } ?>>100%</option>
			</select>
			<span style="color: #999;"><em>Only applies to Fade and Combo animations</em></span>
		</p>
	
	
		<!-- No Follow On or Off: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'nofollow' ); ?>"><?php _e('Use rel="nofollow" for links', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'nofollow' ); ?>" name="<?php echo $this->get_field_name( 'nofollow' ); ?>">
			<option value="on" <?php if($instance['nofollow'] == 'on') { echo 'selected'; } ?>>On</option>
			<option value="off" <?php if($instance['nofollow'] == 'off') { echo 'selected'; } ?>>Off</option>
			</select>
		</p>
		
		
		<!-- Open in new tab: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'newtab' ); ?>"><?php _e('Open in new tab?', 'smw'); ?></label>
			<select id="<?php echo $this->get_field_id( 'newtab' ); ?>" name="<?php echo $this->get_field_name( 'newtab' ); ?>">
			<option value="yes" <?php if($instance['newtab'] == 'yes') { echo 'selected'; } ?>>Yes</option>
			<option value="no" <?php if($instance['newtab'] == 'no') { echo 'selected'; } ?>>No</option>
			</select>
		</p>
		</div>
		<div style="clear: both;"></div>
		<!-- Donate -->
		<p style="color: #999;"><em>This plugin takes up a great deal of my free time, and I don't get paid for any of the time I put into making fixes and adding features. If you can, please donate. Any contribution will help keep Social Media Widget up-to-date.</em></p>
		<p style="text-align: center;">
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=GSE2LMBPYVMEA" <?php echo $newtab; ?>>
		<img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"  alt="" /></a>
		</p>

		

	<?php
	}
}

/* Add scripts to header */
add_action('wp_head', 'Social_Widget_Scripts');


/* Load the widget */
add_action( 'widgets_init', 'socialwidget_load_widgets' );
?>
