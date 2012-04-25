<?php get_header(); ?>
	<div id="content">
		<div id="content-left">
			<div id="header-img">
				<?php include (TEMPLATEPATH . '/header-images.php'); ?>
			</div>	
			<div id="main-content">	
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
			</div>
		</div>
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