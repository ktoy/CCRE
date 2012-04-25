<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<input type="text" class="search-field" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input name="submit" type="image" class="search-submit" value="Search" src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png"/>
</form>

