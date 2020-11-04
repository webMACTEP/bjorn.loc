<?php
/*
 * The template for displaying all pages
 */

get_header();
$sp_obj = New SpClass();

while ( have_posts() ) : the_post(); ?>


<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">	
				<h1><?php $sp_obj->get_title();?></h1>
				<?php the_content();?>		
			</div>
		</div>
	</div>
</section>


<?php endwhile; 

get_sidebar(); 
get_footer();