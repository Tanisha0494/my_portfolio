<?php get_header(); //include header.php ?>

<main class="cf about">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
			
			<h1 class="post-title about" > 

					<?php the_title(); ?> 


			</h1>

			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>
			</article>
						
		</section><!-- end post -->
		
		<?php endwhile; ?>

		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>

<?php //get_sidebar(); //include sidebar.php ?>

<?php get_footer(); //include footer.php ?>