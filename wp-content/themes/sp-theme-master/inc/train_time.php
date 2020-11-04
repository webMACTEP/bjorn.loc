<?php 

class train_time extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Time',
			'description' => 'Output time with an icon'
		);
		parent::__construct('train_time', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-time'); ?>">Write time:</label>
		<input 
			name="<?php echo $this->get_field_name('time'); ?>" 
			id="<?php echo $this->get_field_id('id-time'); ?>" 
			value="<?php echo $instance['time']; ?>" 
			class="widefat"
		>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){ ?>
        <p class="contacts-info__p contacts-info__p_time">
            <?php echo $instance['time']; ?>
        </p>
<?php
	}

	/*public function update(){

	}*/




}


?>