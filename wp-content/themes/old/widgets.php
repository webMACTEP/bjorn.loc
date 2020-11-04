<?php 

class HERE extends WP_Widget {

	public function __construct(){
		$args = array(
			'name' => 'HERE',
			'description' => 'HERE'
		);
		parent::__construct('HERE', '', $args);
	}

	public function form($instance){?>
<!-- Верстка формы -->
	<p>
		<label 
			for="<?php echo $this->get_field_id('ID'); ?>"
		>
			Text:
		</label>
		<input 
			name="<?php echo $this->get_field_name('NAME_HERE'); ?>" 
			id="<?php echo $this->get_field_id('ID'); ?>" 
			value="<?php echo $instance['NAME_HERE']; ?>" 
			class="widefat"
		>
	</p>
<!-- 
	Конец верстки формы
	Конец метода form 
-->

<?php } 

	public function widget($args, $instance){ ?>
		<p>
			Some HTML
		</p>
		<?php echo $instance['NAME_HERE']; ?>
		<hr>
<?php }

	/*public function update(){

	}*/
}?>