<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<?php
			echo do_shortcode("[metaslider id=540]"); 
			?>
		</div>
	</div>
</section>
<section id="banner">
	<div class="container">
		<div class="row">
			<h2>Página não existe</h2>
		</div>
	</div>
</section>
<?php get_footer(); ?>
