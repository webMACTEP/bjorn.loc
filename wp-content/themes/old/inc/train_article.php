<?php 

class train_article extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Article',
			'description' => 'Choose a post to show as a main article'
		);
		parent::__construct('train_article', '', $args);
	}

	public function form($instance){
			$posts = get_posts( array(
				'numberposts' => -1,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'main-article'
			) );
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-article'); ?>">Choose article:</label>
		<select 
			name="<?php echo $this->get_field_name('id-article'); ?>" 
			id="<?php echo $this->get_field_id('id-article'); ?>"
			class="widefat"
		>
		<option value="NULL">
			- Not choosed -
		</option>
		<?php
			foreach( $posts as $post ):
				$title = $post->post_title;
				$id = $post->ID;
		?>
			<option 
				value="<?php echo $id; ?>"
				<?php selected( $instance['id-article'], $id, true ) ?>
			>
				<?php echo $title; ?>
			</option>
		<?php endforeach; ?>		
		</select>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){
		$id = $instance['id-article'];
		$post = get_post( $id );
		$imgs = get_post_gallery( $id, false )['src'];
		$content = $post->post_content;
		$content = preg_replace('/\[gallery.+\]/', '', $content);
		$content = apply_filters('the_content', $content);
		$content = str_replace('<p>', '<p class="info__p">', $content);
		$content = trim($content);
		$content = explode('</p>', $content);
		$last_elem = array_pop($content);
		$last_p = array_pop($content);
		$last_p = str_replace('info__p', 'info__p clear', $last_p);
		array_push($content, $last_p);
		array_push($content, $last_elem);
		$content = join($content, '</p>');
?>
	<article id="about" class="info wrapper clearfix">
	<?php if($imgs): ?>
		<div class="slider-container">
          <figure class="slider">
          	<?php foreach( $imgs as $img ): ?>
            <div class="slider__slide">
              <img class="slider__img" src="<?php echo $img; ?>" alt="CoffeePlanet photo">
            </div>
        	<?php endforeach; ?>
          </figure>
          <button class="slider-container__btn slider-container__btn_prev">
            <span class="visually-hidden">Previous slide</span>
          </button>
          <button class="slider-container__btn slider-container__btn_next">
            <span class="visually-hidden">Next slide</span>
          </button>
        </div>
    <?php endif; ?>
    	<h2 class="info__h cofee-planet__h">
    		<?php echo $post->post_title; ?>
    	</h2>
    	<?php echo $content; ?>
    	<a href="#book" class="info__btn btn_modal"> Book a table in our cozy coffee shop </a>
	</article>
<?php
	}

	/*public function update(){

	}*/




}
?>