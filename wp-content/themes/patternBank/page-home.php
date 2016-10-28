<?php
/**
 * Template Name: Homepage template
 */

 get_header();
?>

<!-- BANNER -->
<?php
	include_once(ABSPATH .'wp-content/themes/patternBank/rows/banner/banner.php');
	callBanner(get_queried_object_id());
?>
<!-- /BANNER -->

<?php get_footer(); ?>