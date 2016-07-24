<?php
/*
Template Name: Standard Template
*/

 get_header(); ?>



<div class="std-main-container">

	<div class="standard-container">
	
		<div class="page-header">
			<h1><?php the_title(); ?></h1>
		</div>




		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</div>


</div>



 <?php get_footer(); ?>

