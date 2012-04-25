<?php get_header(); ?>
	<div id="content">
		<div id="content-left">
			<div id="main-content">	
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1 ><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<?php the_post_thumbnail('single-post-thumbnail'); ?>
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<div class="clear"></div>				
				<div >
				<div class="divider"></div>
				<p class="meta">Categories <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ', ', ' '); ?> | Posted on <?php the_time('F j, Y'); ?></p>
				<p>Social Networks:
					<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/rss.png" alt="RSS" /></a>
					<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/facebook.png" alt="Facebook" /></a> 
					<a href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/twitter.png" alt="Twitter" /></a>  
					<a href="http://www.google.com/bookmarks/mark?op=edit&bkmk=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/google.png" alt="Google" /></a>
					<a href="http://delicious.com/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/delicious.png" alt="del.icio.us" /></a>  
					<a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/stumbleupon.png" alt="Stumble Upon" /></a>
					<a href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/digg.png" alt="Digg" /></a> 
					<a href="http://posterous.com/share?linkto=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/SocialMediaBookmarkIcon/reddit.png" alt="Reddit" /></a> 
				</p>
				</div>
				<?php comments_template(); ?>
				<?php endwhile; else: ?>
				<h1 class="replace">Error 404 - Not Found</h1>
				<p><strong>We're sorry, but that page doesn't exist or has been moved.</strong><br />
				Please make sure you have the right URL.</p>
				<?php endif; ?>
				</div>
			</div><!-- end main content -->
		</div><!-- end content-left -->
                
		<div id="content-right">
		<?php get_sidebar(); ?>
		</div>
	</div>
	<!--content end-->
	<!--Popup window-->
	<?php include(TEMPLATEPATH.'/popup.php') ?>
    </div>
    <!--main end-->
</div>
<!--wrapper end-->
<div class="clear"></div>		
<?php get_footer(); ?>