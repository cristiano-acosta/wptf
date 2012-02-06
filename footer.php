
	<div id="footer"><footer>
		<!--.container_24--><div class="container_24">
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>
			<div id="nav-footer" class="nav"><nav>
					<?php //wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
			</nav></div><!--#nav-footer-->
			<p><a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow"><?php _e('Feeds'); ?></a></p>
			<p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. <?php _e('Todos direitos reservados.'); ?></p>
		</div><!--.container_24-->
	</footer></div>


<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>