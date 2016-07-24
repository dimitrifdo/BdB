<?php
/*
Template Name: Blank Template
*/

 get_header(); ?>


<div class="main-container">
	<div class="logo-container"></div>

	<div class="content-container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	</div>

</div>

 <?php get_footer(); ?>

