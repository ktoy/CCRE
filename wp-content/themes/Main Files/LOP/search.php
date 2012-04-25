<?php get_header(); ?>
	<div id="content">
		<div id="content-left">
			<div id="header-img">
				<?php include (TEMPLATEPATH . '/header-images.php'); ?>
			</div>
			<div id="main-content">	
				<?php if (have_posts()) : ?>
				<h1 class="replace">SEARCH RESULTS: <?php printf(__('\'%s\''), $s) ?></h1>
				<?php while (have_posts()) : the_post(); ?>		
				<div class="post">
					<h3 class="line"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
					<p class="meta">Posted in <?php the_time('F j, Y'); ?></p>
				</div>
				<?php endwhile; else: ?>
				<h2>404 - Not Found</h2>
				<p>The page you are looking for is not here.</p>					 
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