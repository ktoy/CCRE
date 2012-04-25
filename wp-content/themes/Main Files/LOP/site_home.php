<?php
/*
Template Name: Site_Home
*/
?>

<?php get_header(); ?>
<?php $cat_tab_1 = get_option('lp_tab_cat_1');  ?>      
<?php $cat_tab_2 = get_option('lp_tab_cat_2');  ?>      
<?php $cat_tab_3 = get_option('lp_tab_cat_3');  ?>      
<?php $post_number = get_option('lp_post_num');  ?>   

		<div id="content">			 
			<div id="content-left">
				<!-- slide-container -->
                  <div id="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                        <a href="<?php echo get_option('lp_slide_link_1'); ?>"><img src="<?php echo get_option('lp_slide_img_1'); ?>" alt="slide 1" title="<?php echo get_option('lp_slide_capt_1'); ?>"/></a>
                        <a href="<?php echo get_option('lp_slide_link_2'); ?>"><img src="<?php echo get_option('lp_slide_img_2'); ?>" alt="slide 2" title="<?php echo get_option('lp_slide_capt_2'); ?>"/></a>
                        <a href="<?php echo get_option('lp_slide_link_3'); ?>"><img src="<?php echo get_option('lp_slide_img_3'); ?>" alt="slide 3" title="<?php echo get_option('lp_slide_capt_3'); ?>" /></a>
                        <a href="<?php echo get_option('lp_slide_link_4'); ?>"><img src="<?php echo get_option('lp_slide_img_4'); ?>" alt="slide 4" title="<?php echo get_option('lp_slide_capt_4'); ?>"/></a>
                    </div>
                </div>
				<?php if (  get_option('lp_latest_posts') != 'true' ) { ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" class="post">
							<div class="entry">
								<?php the_content(); ?>
							</div>
							<div class="clear"></div>
						</div>
					<?php endwhile; else : ?>
						<div class="post">
							<h2>404 - Not Found</h2>
							<p>The page you are looking for is not here.</p>
						</div>
						<?php endif; ?>					
					
				<?php } else { ?>
					<div id="main-content">
						<?php query_posts("showposts=$post_number"); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post">																		   
							<h2 class="line"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
							<p class="meta"><?php the_time('F j, Y'); ?> in <?php the_category(', '); ?> by <?php the_author_posts_link() ?></p>
							<p class="meta"><?php comments_popup_link('No comments yet', '1 comment', '% comments', '', 'Comments are disabled for this post'); ?></p>	        
						</div>
						<!--/box-->   
						<?php endwhile; else: ?>
						<h2>404 - Not Found</h2>
						<p>The page you are looking for is not here.</p>					 
						<?php endif; ?>
					</div>
				<?php } ?>
            </div>
			<div id="content-right"><?php get_sidebar('home'); ?></div>
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