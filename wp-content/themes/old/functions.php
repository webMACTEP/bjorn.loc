<?php

include_once(__DIR__.'/inc/train_simple_text.php');
include_once(__DIR__.'/inc/train_iframe.php');
include_once(__DIR__.'/inc/train_phone.php');
include_once(__DIR__.'/inc/train_mail.php');
include_once(__DIR__.'/inc/train_time.php');
include_once(__DIR__.'/inc/train_address.php');
include_once(__DIR__.'/inc/train_article.php');


add_action('wp_enqueue_scripts', 'bjorn_scripts');
add_action('after_setup_theme', 'train_setup');
add_action('widgets_init', 'train_widgets');
add_action('init', 'train_registration');
add_action('manage_posts_custom_column', 'train_echo_column',5,2);

add_action('wp_ajax_new_order', 'train_order');
add_action('wp_ajax_nopriv_new_order', 'train_order');


add_filter('show_admin_bar', '__return_false');
add_filter('manage_posts_columns', 'train_add_column');

function bjorn_scripts(){
	wp_enqueue_style('my-normalize', get_template_directory_uri() . '/assets/css/normalize.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-bootstrapp-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-pushy', get_template_directory_uri() . '/assets/css/pushy.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-slick', get_template_directory_uri() . '/assets/lib/slick/slick.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-slick2', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-animate', get_template_directory_uri() . '/assets/css/animate.min.css', [], '1.0.0', 'all');

	wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.1', 'all');

	wp_enqueue_style('my-media', get_template_directory_uri() . '/assets/css/media.css', [], '1.0.2', 'all');

	wp_enqueue_style('my-fancy', get_template_directory_uri() . '/assets/lib/fancybox/jquery.fancybox.min.css', [], '1.0.0', 'all');


	wp_enqueue_script('my-jquery', get_template_directory_uri() . '/assets/lib/jquery/jquery.min.js', [], '2.2', true);

	wp_enqueue_script('pyshu-js', get_template_directory_uri() . '/assets/lib/pushy/pushy.min.js', ['my-jquery'], '2.2', true);

	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/lib/slick/slick.min.js', ['my-jquery'], '2.2', true);

	wp_enqueue_script('masked-js', get_template_directory_uri() . '/assets/lib/maskinput/jquery.maskedinput.min.js', ['my-jquery'], '2.2', true);

	wp_enqueue_script('fancy-js', get_template_directory_uri() . '/assets/lib/fancybox/jquery.fancybox.min.js', ['my-jquery'], '2.2', true);

	wp_enqueue_script('count-js', get_template_directory_uri() . '/assets/js/jquery.downCount.js', ['my-jquery'], '2.2', true);

	wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/main.js', ['my-jquery', 'slick'], '2.3', true);
}

function my_js_variables() { ?>
      <script type="text/javascript">
        var mailScript = '<?php echo get_template_directory_uri(); ?>/assets/php/rest.php';
        var gerDir = '<?php echo get_template_directory_uri();?>';
      </script><?php
}
add_action ( 'wp_head', 'my_js_variables' );

function train_setup(){
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menu('menu-header', 'Menu in header');
	register_nav_menu('menu-phone', 'Menu for phone number');
}

function train_widgets(){
	register_sidebar([
		'name' => 'First screen',
		'id' => 'first-screen',
		'description' => 'Heading in first screen',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Make a choice text',
		'id' => 'choice',
		'description' => 'Text in the \'Make a choice\' section',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Main article block',
		'id' => 'article',
		'description' => 'Main article section',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Features text',
		'id' => 'features',
		'description' => 'Text in the \'Features\' section',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Contact us section',
		'id' => 'contacts',
		'description' => 'Sidebar for \'Contact us\' section',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Map',
		'id' => 'map-block',
		'description' => 'Sidebar for \'Map\' section',
		'before_widget' => null,
		'after_widget' => null
	]);
	register_sidebar([
		'name' => 'Video pop-up',
		'id' => 'video',
		'description' => 'Sidebar for \'Watch video\' pop-up',
		'before_widget' => null,
		'after_widget' => null
	]);

	register_widget('train_text');
	register_widget('train_iframe');
	register_widget('train_phone');
	register_widget('train_mail');
	register_widget('train_time');
	register_widget('train_address');
	register_widget('train_article');
}


function train_registration(){

	register_post_type('products', [
		'labels' => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуги', // название для одной записи этого типа
			'add_new'            => 'Добавить услугу', // для добавления новой записи
			'add_new_item'       => 'Добавить услугу', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Добавить услугу', // для редактирования типа записи
			'new_item'           => 'Новая услуга', // текст новой записи
			'view_item'          => 'Просмотр услуги', // для просмотра записи этого типа.
			'search_items'       => 'Поиск', // для поиска по этим типам записи
			'not_found'          => 'Ничего не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'В мусорке пусто', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Услуги', // название меню
		],
		'public'              => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-store', 
		'hierarchical'        => false,
		'supports'            => array('title', 'thumbnail'),
		'has_archive' => false,
		'taxonomies' => array('product-category')
	]);

	register_taxonomy('product-category', array('products'), array(
		'labels'                => array(
			'name'              => 'Категории услуг',
			'singular_name'     => 'Категории',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Посмотреть категорию',
			'edit_item'         => 'Редактировать',
			'update_item'       => 'Обновить',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Добавить категорию',
			'menu_name'         => 'Категории',
		),
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true
	));


	register_post_type('features', [
		'labels' => [
			'name'               => 'Информация', // основное название для типа записи
			'singular_name'      => 'Информация', // название для одной записи этого типа
			'edit_item'          => 'Редактировать запись', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Посмотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Поиск', // для поиска по этим типам записи
			'not_found'          => 'Ничего не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'В корзине пусто', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Информация', // название меню
		],
		'public'              => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-info', 
		'hierarchical'        => false,
		'supports'            => array('title', 'thumbnail'),
		'has_archive' => false
	]);


}

function train_order(){
	$name = wp_strip_all_tags($_POST['order-name']);
	$phone = wp_strip_all_tags($_POST['order-phone']);
	$id = wp_insert_post( wp_slash([
		'post_title' => 'Order from: '.$name,
		'post_type' => 'orders',
		'post_status' => 'publish',
		'meta_input' => [
			'order-name' => $name,
			'order-phone' => $phone
		]
	]) );
	if( $id ){
		update_field('order-name', $name, $id);
		update_field('order-phone', $phone, $id);
	}
	echo 'Thank you! We\'ve got your order. Your order\'s number is: <strong>#' . $id.'</strong>';
	wp_die();
}

function train_add_column($def){
	$def['order-id'] = 'Order ID';
	return $def;
}

function train_echo_column($name, $id){
	if( $name === 'order-id' ){
		echo '#'.$id;
	}
}


function bjorn_get_image($name){
	return get_template_directory_uri() . '/assets/img/' . $name;
}


























?>