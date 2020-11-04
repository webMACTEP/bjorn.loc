<?php 

class train_mail extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Mail',
			'description' => 'Output mail with an icon'
		);
		parent::__construct('train_mail', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-email'); ?>">Write email address here:</label>
		<input 
			name="<?php echo $this->get_field_name('email'); ?>" 
			id="<?php echo $this->get_field_id('id-email'); ?>" 
			value="<?php echo $instance['email']; ?>" 
			class="widefat"
		>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){ ?>
        <p class="contacts-info__p contacts-info__p_email">
            <a class="contacts-info__link" href="mailto:<?php echo $instance['email']; ?>">
            	<?php echo $instance['email']; ?>
            </a>
        </p>
<?php
	}

	/*public function update(){

	}*/




}


?>