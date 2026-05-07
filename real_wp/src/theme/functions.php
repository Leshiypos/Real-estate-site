<?php

if (! defined('_S_VERSION')) {

	define('_S_VERSION', '1.0.0');
}

function real_estate_setup()
{

	load_theme_textdomain('real_estate', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'real_estate'),
		)
	);

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

	add_theme_support(
		'custom-background',
		apply_filters(
			'real_estate_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_image_size("about-section-gallery-thumb", 300, 190, true);
	add_image_size("floor-plan-gallery-thumb", 427, 289, true);
}
add_action('after_setup_theme', 'real_estate_setup');

function real_estate_content_width()
{
	$GLOBALS['content_width'] = apply_filters('real_estate_content_width', 640);
}
add_action('after_setup_theme', 'real_estate_content_width', 0);

function real_estate_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'real_estate'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'real_estate'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'real_estate_widgets_init');

function real_estate_scripts()
{
	wp_enqueue_style('real_estate-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('real_estate-style', 'rtl', 'replace');

	// Fonts
	wp_enqueue_style('helvetica-font', get_template_directory_uri() . '/assets/fonts/helvetica/helvetica-font.css', array(), _S_VERSION);

	wp_enqueue_style('ivymode-font', get_template_directory_uri() . '/assets/fonts/ivymode/ivymode-font.css', array(), _S_VERSION);

	// Libraries CSS
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.css', array(), _S_VERSION);

	wp_enqueue_style('lenis', 'https://unpkg.com/lenis@1.3.4/dist/lenis.css', array(), '1.3.4');

	wp_enqueue_style('intl-tel-input', 'https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/css/intlTelInput.css', array(), '18');

	wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', array(), null);

	// Main CSS
	wp_enqueue_style('real-estate-main', get_template_directory_uri() . '/assets/css/styles.css', array('swiper', 'lenis', 'intl-tel-input', 'glightbox'), _S_VERSION);

	// Libraries JS
	wp_enqueue_script('gsap',	'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', '3.13.0', true);

	wp_enqueue_script('gsap-scrolltrigger',	'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',	array('gsap'), '3.12.5',	true);

	wp_enqueue_script('lenis', 'https://unpkg.com/lenis@1.3.4/dist/lenis.min.js', array(), '1.3.4', true);

	wp_enqueue_script('swiper',	get_template_directory_uri() . '/assets/libs/swiper/swiper-bundle.min.js',	array(), _S_VERSION,	true);

	wp_enqueue_script('intl-tel-input',	'https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/js/intlTelInput.min.js',	array(), '18', true);

	wp_enqueue_script('intl-tel-input-utils',	'https://cdn.jsdelivr.net/npm/intl-tel-input@18/build/js/utils.js',	array('intl-tel-input'), '18', true);

	wp_enqueue_script('glightbox',	'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);

	// Theme JS
	wp_enqueue_script('real-estate-main',	get_template_directory_uri() . '/assets/js/main.js', array('swiper', 'lenis', 'gsap', 'gsap-scrolltrigger', 'intl-tel-input', 'glightbox'),	_S_VERSION,	true);

	wp_enqueue_script('real-estate-ajax',	get_template_directory_uri() . '/assets/js/ajax.js', array('swiper', 'lenis', 'gsap', 'gsap-scrolltrigger', 'intl-tel-input', 'glightbox'),	_S_VERSION,	true);

	wp_enqueue_script('real-estate-sliders',	get_template_directory_uri() . '/assets/js/sliders.js',	array('swiper'), _S_VERSION,	true);

	wp_enqueue_script('real-estate-animation', get_template_directory_uri() . '/assets/js/animation.js', array('gsap', 'gsap-scrolltrigger'),	_S_VERSION,	true);

	wp_enqueue_script('real_estate-navigation',	get_template_directory_uri() . '/js/navigation.js',	array(), _S_VERSION,	true);

	wp_localize_script('real-estate-ajax', 'my_ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'),
	));
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'real_estate_scripts');






// разрешить загрузку SVG только администраторам
// Разрешаем SVG только администраторам
add_filter('upload_mimes', function ($mimes) {
	if (current_user_can('manage_options')) {
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
	} else {
		// на всякий случай запретим, если кто-то добавил ранее
		unset($mimes['svg'], $mimes['svgz']);
	}
	return $mimes;
});
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
	if (in_array($ext, ['svg', 'svgz'], true)) {
		$data['ext']             = 'svg';
		$data['type']            = 'image/svg+xml';
		$data['proper_filename'] = $data['proper_filename'] ?: $filename;
	}
	return $data;
}, 10, 4);
// Минимальный фикс превью в админке
add_action('admin_head', function () {
	echo '<style>
      .attachment .thumbnail img[src$=".svg"],
      .media-icon img[src$=".svg"]{ width:100%; height:auto; }
    </style>';
});

// Добавление языков для options ACF
add_filter('acf/settings/current_language', function () {
	return pll_current_language();
});

// MARK: AJAX

//MARK: Отправка форм на почту

function handle_send_mail()
{
	if (!isset($_POST['send_mail_wpnonce']) || !wp_verify_nonce($_POST['send_mail_wpnonce'], 'send_mail')) {
		wp_send_json_error(array('message' => 'Security error!'));
	}

	$namber = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
	$dial_code = isset($_POST['dial_code']) ? sanitize_text_field($_POST['dial_code']) : '';




	// $to = get_option('admin_email');
	$to = get_option('admin_email');


	$message = "Пришло сообщение с формы сайта Real Estate \n";

	if ($namber) {
		$message .= "Телефон: +$dial_code $namber \n";
	}


	$from = 'Leshiy_pos@mail.ru';
	$subject = 'Пришло сообщение с формы сайта Real Estate';
	$headers = array('From: ' . get_bloginfo('name') . ' <' . $from . '>'); //Заголовок должен содержать адрес почты, зарегестрированный в SMTP

	$sent = wp_mail($to, $subject, $message, $headers);

	if ($sent) {
		wp_send_json_success(array('message' => 'Thank you! Your data has been sent.'));
	} else {
		wp_send_json_error(array('message' => 'Sending error. Try again later.'));
	}

	wp_die();
}
add_action('wp_ajax_send_mail', 'handle_send_mail');
add_action('wp_ajax_nopriv_send_mail', 'handle_send_mail');

// Тестовая настройка почтового сервера через Docker
add_action('phpmailer_init', function ($m) {
	$m->isSMTP();
	$m->Host = 'smtp.gmail.com';
	$m->Port = 587;           // или 465 + 'ssl'
	$m->SMTPSecure = 'tls';
	$m->SMTPAuth = true;
	$m->Username = 'wpdevelsite@gmail.com';
	$m->Password = 'sphb xcoi wkny bxay'; // пароль приложения
});

require get_template_directory() . '/inc/polylang.php';
