

<?php get_header();

	while (have_posts()) {
		# code...
		the_post(); ?>

		<h2><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>

		<hr>


	<?php } 

	get_footer();
	?>

	
	


 




