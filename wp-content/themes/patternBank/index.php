<?php
	get_header();
?>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/rows/general-module.js'></script>

<div class="row">
	<div class="content_container">

		<div class="page_title">
			<h1>Gallery</h1>
		</div>

		<div class="general_modules gm_thirds equal_height center_align">
			<div class="general_modules_inner cfx">






<?php $args = array(
	'parent' => 0,
	'exclude' => '1' 
); ?>



<?php
	if ( have_posts() ) :
?>

	<div class="posts_container">
		<div class="posts cfx">

<?php

		while ( have_posts() ) : the_post();

		    $img = get_field('thumbnail');
		    $copy = get_field('excerpt');
		    $btnText = 'View more';
		    $btnlink = get_permalink();

		    if(!$copy){
		    	$copy = stripFormatting(content(23));
		    	$copy = '<p>'.$copy.'</p>';
		    }
?>
			<div class="general_module">
				<a href="<?php echo $btnlink; ?>" class="general_module_inner">

					<div class="image" style="background: url('<?php echo $img; ?>') center center no-repeat;"></div>

					<div class="content">
						<h2><?php the_title(); ?></h2>
						<div class="copy"><?php echo $copy; ?></div>
					</div>

					<span class="gm_link"><?php echo $btnText; ?></span>
				</a>
			</div>

<?php			
		endwhile;
?>
		</div>
	</div><!-- close post list container -->
<?php the_posts_pagination( array( 'mid_size' => 5 ) ); ?>


	
<?php
	wp_reset_postdata();
?>
				
		

<?php
	endif;
?>







			</div>
		</div>
	</div>
</div>

<?php 
	get_footer(); 
?>