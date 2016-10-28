<?php
/**
  * Template Name: Contact template
*/

	get_header();
?>

<div class="row">
	<div class="content_container">

		<div class="page_title">
			<h1><?php the_title(); ?></h1>
		</div>

<?php
	if ( have_posts() ) :
?>

<?php
		while ( have_posts() ) : the_post();
?>

		<div class="page">
			<article>
				<?php the_content(); ?>
			</article>

<?php
	include_once(ABSPATH .'wp-content/themes/patternBank/rows/form/form.php');
	callGravityForm(1);
?>			

		</div>

<?php			
		endwhile;
?>

<?php
	endif;
?>
	</div>
</div>

<?php 
	get_footer(); 
?>
