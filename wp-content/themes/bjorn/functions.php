<?php
/**
 * bjorn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bjorn
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bjorn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bjorn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bjorn, use a find and replace
		 * to change 'bjorn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bjorn', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'bjorn' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bjorn_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bjorn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bjorn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bjorn_content_width', 640 );
}
add_action( 'after_setup_theme', 'bjorn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bjorn_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bjorn' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bjorn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bjorn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bjorn_scripts() {
	wp_enqueue_style( 'bjorn-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bjorn-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bjorn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

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
add_action( 'wp_enqueue_scripts', 'bjorn_scripts' );
function my_js_variables() { ?>
      <script type="text/javascript">
        var mailScript = '<?php echo get_template_directory_uri(); ?>/assets/php/rest.php';
        var gerDir = '<?php echo get_template_directory_uri();?>';
      </script><?php
}
add_action ( 'wp_head', 'my_js_variables' );
function bjorn_get_image($name){
	return get_template_directory_uri() . '/assets/img/' . $name;
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
}
add_action('init', 'train_registration');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

