<?php get_header(); //include header.php ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
			
			<h2 class="post-title" > 

				<a href="<?php the_permalink(); ?>"> 

					<?php the_title(); ?> 

				</a>

			</h2>

			<?php //the_post_thumbnail('featured', array('class' => 'feature' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>
			</article>

			<article class="postmeta cf"> 
				<span class="author"> Posted by: <?php the_author(); ?></span>
				<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
			</article><!-- end postmeta -->
						
		</section><!-- end post -->

		
		<?php endwhile; ?>

		<section class="pagination cf">
			<?php next_post_link( '%link', '< %title' ); //newer ?>

			<?php previous_post_link( '%link ', '%title >' ); //older ?>
		</section>
		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>

<?php get_footer(); //include footer.php ?>