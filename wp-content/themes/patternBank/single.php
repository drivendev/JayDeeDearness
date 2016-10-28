<?php
	get_header();
?>


<div class="row">
	<div class="content_container">

		<div class="page_title">
			<h1><?php the_title(); ?></h1>
		</div>







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
?>

		<div class="page">
			<article>
				<?php the_content(); ?>
			</article>

			<div class="gallery">
<?php
	if( have_rows('gallery') ):
	    while ( have_rows('gallery') ) : the_row();

	        $img = get_sub_field('image');
?>
			<div class="gallery_image">
				<img src="<?php echo $img; ?>" alt="">
			</div>
<?php
	    endwhile;
	endif;
?>				
			</div>

			<a href="/gallery" class="button">Back to gallery</a>

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

<?php 
	get_footer(); 
?>