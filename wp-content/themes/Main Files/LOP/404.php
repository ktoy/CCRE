<?php get_header(); ?>
	<div id="content">
		<div id="content-left">
			<div id="main-content">
				<h1 class="replace">Error 404 - Not Found</h1>
				<p><strong>We're sorry, but that page doesn't exist or has been moved.</strong><br />
				Please make sure you have the right URL.</p>
				<p>If you still can't find what you're looking for, try using the search form below.</p>
				<p>We're sorry for any inconvenience.</p>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
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