<?php 

class train_text extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Text',
			'description' => 'Output simple text'
		);
		parent::__construct('train_text', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-text'); ?>">Text:</label>
		<textarea name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('id-text'); ?>" value="<?php echo $instance['text']; ?>" class="widefat"><?php echo $instance['text']; ?></textarea>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){
		echo $instance['text'];
	}

	/*public function update(){

	}*/




}
?>