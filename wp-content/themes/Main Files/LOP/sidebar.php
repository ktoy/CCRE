<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<div class="sidebaritem">
			<h3 class="replace">Recent Posts</h3>
			<ul>
			<?php wp_get_archives('type=postbypost&limit=5'); ?>
			</ul>
			<div class="divider"></div>
		</div>
		<div class="sidebaritem"> 
			<h3 class="replace">Monthly Archives</h3>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
			<div class="divider"></div>		
		</div>                        
	<?php endif; ?>
</div>
<!-- end #sidebar -->