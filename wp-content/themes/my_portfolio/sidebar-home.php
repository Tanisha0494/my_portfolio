<!-- <aside class="cf">
<?php //if(!dynamic_sidebar('Front Page Sidebar')){ ?>
	<section class="widget">
	<h2>Tags</h2>
	<?php //wp_tag_cloud(); ?>
	</section>

	<section class="widget">
	<h2>Tags</h2>
	<?php //wp_tag_cloud(); ?>
	</section>

	<section class="widget">
	<h2>Tags</h2>
	<?php //wp_tag_cloud(); ?>
	</section>
<?php //} ?>
</aside> -->

<aside class="cf">

<h3> Recent Work </h3>

<?php  
 	$portfolio_query = new WP_Query(array(
		'post_type' => 'portfolio',
		'showposts'	=> 4,
		'nopaging'  => false,
		)); 

	if( $portfolio_query->have_posts() ){ ?>

	<section class="portfolio-widget">

	<?php while($portfolio_query->have_posts()){ 
	$portfolio_query-> the_post(); 
	?>

		<a href="<?php the_permalink(); ?>">
				
			<figure class="effect-honey">

				<?php the_post_thumbnail('work', array('class' => 'work' )); //featured image (activate in functions.php) ?>

					<figcaption><h2> <?php the_title(); ?> </h2></figcaption>

			</figure>
		</a>

	<?php }//end while ?>

	</section><!-- end post -->

<?php

}//end if
wp_reset_postdata();
 ?>
</aside>