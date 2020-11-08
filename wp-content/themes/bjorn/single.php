<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bjorn
 */

get_header();
?>

<?php
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content', 'page');

// If comments are open or we have at least one comment, load up the comment template.

endwhile; // End of the loop.
?>  

<?php
get_sidebar();
get_footer();
