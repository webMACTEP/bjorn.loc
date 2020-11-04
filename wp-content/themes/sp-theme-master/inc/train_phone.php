<?php 

class train_phone extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Phone',
			'description' => 'Output phone number with an icon'
		);
		parent::__construct('train_phone', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-phone-text'); ?>">Phone text:</label>
		<input 
			name="<?php echo $this->get_field_name('phone-text'); ?>" 
			id="<?php echo $this->get_field_id('id-phone-text'); ?>" 
			value="<?php echo $instance['phone-text']; ?>" 
			class="widefat"
		>
	</p>
	<p>
		<label for="<?php echo $this->get_field_id('id-phone-link'); ?>">Phone link:</label>
		<input 
			name="<?php echo $this->get_field_name('phone-link'); ?>" 
			id="<?php echo $this->get_field_id('id-phone-link'); ?>" 
			value="<?php echo $instance['phone-link']; ?>" 
			class="widefat"
		>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){ ?>
		<p class="contacts-info__p contacts-info__p_phone">
            <a class="contacts-info__link" href="tel:<?php echo $instance['phone-link']; ?>">
            	<?php echo $instance['phone-text']; ?>
            </a>
        </p>
<?php
	}

	/*public function update(){

	}*/




}


?>