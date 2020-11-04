<?php
/*
 * sp functions and definitions
 */

include_once(__DIR__.'/inc/train_simple_text.php');
include_once(__DIR__.'/inc/train_iframe.php');
include_once(__DIR__.'/inc/train_phone.php');
include_once(__DIR__.'/inc/train_mail.php');
include_once(__DIR__.'/inc/train_time.php');
include_once(__DIR__.'/inc/train_address.php');
include_once(__DIR__.'/inc/train_article.php');
add_filter('show_admin_bar', '__return_false');

if ( ! function_exists( 'sp_setup' ) ) :

	function sp_setup() {

		load_theme_textdomain( 'sp-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );


		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'sp-theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'sp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'sp_setup' );


function sp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sp_content_width', 640 );
}
add_action( 'after_setup_theme', 'sp_content_width', 0 );

//Register widget area.
function sp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sp-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sp-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
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
add_action( 'widgets_init', 'sp_widgets_init' );
add_action('init', 'train_registration');
add_action( 'wp_enqueue_scripts', 'bjorn_scripts' );
add_action ( 'wp_head', 'my_js_variables' );

function bjorn_get_image($name){
	return get_template_directory_uri() . '/assets/img/' . $name;
}

//Include the TGM_Plugin_Activation class.
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

//Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/sp-class.php';

//Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

//Customizer additions.
require get_template_directory() . '/inc/customizer.php';