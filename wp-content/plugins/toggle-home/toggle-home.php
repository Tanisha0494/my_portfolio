<?php 
/*
Plugin Name: Toggle Effect
Description: A plugin that makes a simple toggle effect happen
Author: Tanisha Rose
Plugin URI: http://path to documentation
Author URI:
Version: 0.1
License: GPLv3
*/

function port_toggle(){
?>
<section class="skills cf">
<h1>What I Do</h1>

	<section class="ds">

		<h2 class="click"><a href="javascript:;">Web Development</a></h2>

			<figure class="toggle">
				<h3> UX & Design </h3>

				<p> I create layouts that are appealing and meet the goals of the client while provide the best possible experience for the user.</p>

				<h3 > Development & Content </h3>

				<p> Bringing the design to life I go into the development process. I start with plain HTML5, with content that appeals to the target audience, then add CSS and any extra like PHP or JavaScript. </p>

			</figure>

	</section>

	<section class="ds">

		<h2 class="click2"><a href="javascript:;">Graphic Design</a></h2>

		<figure class="toggle2">
			<h3> Concept & Layout </h3>
			<p> Before I even go into PhotoShop or Illustrator I sketch up my idea and also discuss up color ideas or any kind design elements.</p>

			<h3> Design & Content </h3>
			<p> Here's where I put it all together from colors, typography, color corrections, illustrations and everything in between. While designing I make sure it fits the client's needs and pleases them as well. </p>
		</figure>

	</section>

</section>
<?php } //end function ?>
<?php  
add_action('wp_enqueue_scripts', 'port_toggle_scripts');

function port_toggle_scripts(){
	if(is_front_page()):

	$t_path = plugins_url('js/toggle.js' , __FILE__ );
	wp_enqueue_script('port-toggle-js', $t_path,'jquery', false, true);

	endif;
} ?>