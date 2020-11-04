<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bjorn
 */

?>





<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="page__title">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
				<div class="page__text">
							<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bjorn' ),
				'after'  => '</div>',
			)
		);
		?>
				</div>
			</div>
		</div>
	</div>
</section>





