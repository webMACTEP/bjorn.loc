<?php 

class train_iframe extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - YouTube and Map',
			'description' => 'Output YouTube or Map'
		);
		parent::__construct('train_iframe', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-iframe'); ?>">HTML code for embeded content:</label>
		<textarea 
			name="<?php echo $this->get_field_name('iframe-code'); ?>" 
			id="<?php echo $this->get_field_id('id-iframe'); ?>" 
			value="<?php echo $instance['iframe-code']; ?>"
			class="widefat">
			<?php echo $instance['iframe-code']; ?>
		</textarea>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){
		echo $instance['iframe-code'];
	}

	/*public function update(){

	}*/




}
?>