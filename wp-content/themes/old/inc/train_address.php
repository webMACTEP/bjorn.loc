<?php 

class train_address extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'Train - Address',
			'description' => 'Output address with an icon'
		);
		parent::__construct('train_address', '', $args);
	}

	public function form($instance){
		
		?>
<!-- Верстка формы -->
	<p>
		<label for="<?php echo $this->get_field_id('id-address'); ?>">Write address:</label>
		<input 
			name="<?php echo $this->get_field_name('address'); ?>" 
			id="<?php echo $this->get_field_id('id-address'); ?>" 
			value="<?php echo $instance['address']; ?>" 
			class="widefat"
		>
	</p>
<!-- Конец верстки формы -->
<?php

	} //Конец метода form

	public function widget($args, $instance){ ?>
        <p class="contacts-info__p contacts-info__p_adress">
            <?php echo $instance['address']; ?>
        </p>
<?php
	}

	/*public function update(){

	}*/




}


?>