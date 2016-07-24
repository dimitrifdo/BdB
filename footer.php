

<div class="footer-container">
	<div id="footer-bg">
	</div>

	<div class="menu-bar-container issub">
			<div class="menu-bar-inner">
				<div class="logo-container"></div>
				<?php 
					wp_nav_menu( array(
							'theme_location' => 'top-menu',
							'menu_class' => 'menu-bar'
					));
				?>
				<div class="social-container">
					<ul>
						<li><a id="facebook" href="https://www.facebook.com/BlancShow/?fref=ts"></a></li>
						<li><a id="insta" href="https://twitter.com/strutnfret"></a></li>
						<li><a id="youtube" href="https://www.youtube.com/watch?v=7rfO81AdIIg"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</div>

<?php wp_footer(); ?>

</body>
</html>