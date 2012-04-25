<?php get_header(); ?>
<div id="content">
    <div id="content-left">
	<div id="main-content">
	    <h1 class="replace">Latest News</h1>
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
	    <div id="page-nav">
		<?php next_posts_link('&laquo; Previous Entries') ?>
		<?php previous_posts_link('Next Entries &raquo;') ?>
	    </div>
	</div>
    </div>
    <div id="content-right"><?php get_sidebar(''); ?></div>
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