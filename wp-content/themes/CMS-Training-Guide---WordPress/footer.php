    <footer class="bs-footer">
        <div class="container">
			<?php
			if(has_nav_menu('footer-nav')){
				$defaults = array(
					'theme_location'  => 'footer-nav',
					'menu'            => 'footer-nav',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'footer-links',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);

				wp_nav_menu( $defaults );
			} ?>
			<div id="attribution">
				<p>Guide by MESH Design + Development <img src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></p>
			</div>
        </div>
    </footer>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/dist/js/bootstrap.js"></script>
    <script src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/holder.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/application.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>