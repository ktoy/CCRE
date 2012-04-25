<?php if (is_page('28')) { ?>
	<img src="<?php bloginfo('template_url'); ?>/img/headers/header-1.jpg" width="640" alt="<?php bloginfo('name'); ?> header image" />
<?php } elseif (is_page('26')) { ?>
	<img src="<?php bloginfo('template_url'); ?>/img/headers/header-2.jpg" width="640" alt="<?php bloginfo('name'); ?> header image" />
<?php } elseif (is_page('30')) { ?>
	<img src="<?php bloginfo('template_url'); ?>/img/headers/header-3.jpg" width="640" alt="<?php bloginfo('name'); ?> header image" />
<?php } else { ?>
	<img src="<?php bloginfo('template_url'); ?>/rotating.php?image=<?php echo mt_rand(0,100); ?>" width="640" alt="<?php bloginfo('name'); ?> Rotating Header Image" title="<?php bloginfo('name'); ?> Random Header Image" />
<?php } ?>