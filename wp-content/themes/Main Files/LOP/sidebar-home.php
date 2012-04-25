  	<!-- Headline Box -->
	<div class="headline_box">
		<div class="middle">
			<h3 class="replace"><?php echo get_option('lp_hlbox_title'); ?></h3>
			<?php echo stripslashes (get_option('lp_hlbox_text')); ?>
		</div>
		<div class="bottom"></div>
	</div>
	<div id="sidebar">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('HomeSidebar') ) : ?>
			<div id="sidebar-box">
				<h3><a href="#">Get Our Newsletter</a></h3>
				<p>Sign up for weekly email with information</p>
			</div>
			<div class="divider"></div>		
			<div class="sidebaritem"> 
				<h3 class="replace">Archives</h3>
				<ul><?php wp_get_archives('type=monthly&limit=5'); ?></ul>
			</div>
			<div class="divider"></div>
			<div class="sidebaritem">
				<h3 class="replace">Prayer Request</h3>
				<p class="left">Can We Pray For You?<br/>Get Prayer From All of Us</p>
				<a class="btn2" href="#">Request</a>
				<div class="clear"></div>
			</div>
		<?php endif; ?>          
	</div><!-- end #sidebar -->             