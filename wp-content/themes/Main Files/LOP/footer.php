<div id="footer-wrapper">
    <div id="footer">
        <div class="left-col left">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
            <div class="footer-col left">
				<h6>NEW HERE?</h6>
				<ul>
					<li><a href="urlhere">Service Times</a></li>
					<li><a href="urlhere">History</a></li>
					<li><a href="urlhere">Upcoming Events</a></li>
					<li><a href="urlhere">Contact Us</a></li>
				</ul>
            </div>
			<div class="footer-col left">
				<h6>Ministries</h6>
				<ul>
					<li><a href="urlhere">Men's Ministry</a></li>
					<li><a href="urlhere">Women's Ministry</a></li>
					<li><a href="urlhere">Youth Ministry</a></li>
					<li><a href="urlhere">Children's Ministry</a></li>
					<li><a href="urlhere">Education Ministry</a></li>
				</ul>
            </div>
			<div class="footer-col left">
                <h6>Education Programs</h6>
				<ul>
                    <li><a href="urlhere">Biblical Institute</a></li>
					<li><a href="urlhere">High School Program</a></li>
					<li><a href="urlhere">Praise Dance</a></li>
                </ul>
            </div>
			<?php endif; ?>
        </div>
        <div class="right-col left">
			<a href="<?php echo get_option('home'); ?>" title="Home"><img src="<?php if (get_option('lp_logo_footer')) : echo get_option('lp_logo_footer'); else: bloginfo('stylesheet_directory');?>/img/footer-logo.png<?php endif; ?>" alt="Home" /></a>	
			<address>
			<?php echo get_option('lp_footer_text'); ?>
			</address>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<?php echo stripslashes(get_option('lp_tracking_code'))?>
<?php wp_footer(); ?> 
</body>
</html>