
<?php get_header(); //include header.php ?>

<main class="cf">

	<section class="welcome cf">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome-graphic.png" alt="illustrated Tanisha"> 
		<div>
		<h1>Hi,</h1>
		<h2>I'm a Web Developer and a Graphic Designer </h2>
		</div>
	</section>
	
		<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >


			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>

						
		</section><!-- end post -->
		
		<?php endwhile; ?>


	<?php endif;  //end THE LOOP ?>

	<?php port_toggle(); ?>

</main>

<?php get_sidebar('home'); ?>

<?php get_footer(); //include footer.php ?>