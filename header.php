<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blanc de Blanc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- END FONTS -->

	<!-- CDN -->
	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
	<!-- END CDN -->



	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?>


	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78393928-1', 'auto');
  ga('send', 'pageview');

</script>



</head>

<body>

<!-- MENU BUTTON -->
<div class="menu-btn-holder">
	<div class="menu-button"></div>
</div>

<!-- MOBILE MNEU -->
	 <div class="menu-container">
		<div class="menu-items">
				<?php 
					wp_nav_menu( array(
							'theme_location' => 'top-menu',
							'menu_class' => 'nav-collapse'
					));
				?>
		</div>		
	</div>

<!-- END OF MOBILE MENU -->


	<div class="menu-bar-container">
		<div class="menu-bar-inner">
			<div class="logo-container"><a href="http://www.blancshow.com/"></a></div>
			<?php 
				wp_nav_menu( array(
						'theme_location' => 'top-menu',
						'menu_class' => 'menu-bar'
				));
			?>
			<div class="social-container">
				<ul>
					<li><a target="_blank" id="facebook" href="https://www.facebook.com/BlancShow/?fref=ts"></a></li>
					<li><a target="_blank" id="insta" href="https://www.instagram.com/strutnfret/"></a></li>
					<li><a target="_blank" id="youtube" href="https://www.youtube.com/watch?v=ng6cRLPzu2g"></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>



	<div id="header-container"><!-- START OF HEADER-CONTAINER -->

	</div> <!-- END OF HEADER-CONTAINER -->


