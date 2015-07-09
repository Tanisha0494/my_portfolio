<?php get_header(); //include header.php ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf work'); ?> >

			<a href="<?php the_permalink(); ?>">
				
				<figure class="effect-honey">

				<?php the_post_thumbnail('work', array('class' => 'work' )); //featured image (activate in functions.php) ?>

					<figcaption> <h2> <?php the_title(); ?> </h2> </figcaption>

				</figure>
			</a>
		</section><!-- end post -->
		
		<?php endwhile; ?>
		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>


<?php get_footer(); //include footer.php ?>