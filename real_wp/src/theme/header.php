<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<?php
		$logo = get_field("site_logo", "option") ?? get_template_directory_uri() . "/assets/images/icons/logo.svg";
		?>
		<div class="wrap_header" id="start_page">
			<a href="<?php echo esc_url(function_exists('pll_home_url') ? pll_home_url() : home_url('/')); ?>" class="logo">
				<img src="<?php echo $logo; ?>" alt="logo" />
			</a>
			<nav class="main_menu desktop">
				<ul>
					<li><a href="#start_page"><?php pll_e('HOME'); ?></a></li>
					<li><a href="#about"><?php pll_e('ABOUT BUILDING'); ?></a></li>
					<li><a href="#gallery"><?php pll_e('GALLERY'); ?></a></li>
					<li><a href="#plans"><?php pll_e('FLOORS PLANS'); ?></a></li>

				</ul>
			</nav>
			<ul class="language_block">

				<?php
				if (function_exists('pll_the_languages') && function_exists('pll_get_post')) {
					$post_id = get_the_ID();
					if (pll_get_post($post_id, 'ru')) {
						pll_the_languages([
							'dropdown' => 0,
							'show_flags' => 0,
							'show_names' => 1,
							'hide_current' => 0,
							'display_names_as' => 'slug',
							'hide_if_no_translation' => 1,
						]);
					}
				}
				?>
			</ul>
			<div class="btn_block desktop">
				<a href="#" class="btn accent" data-btn-open="pop_up">
					<div class="btn_wrap"><?php pll_e('Book a viewing'); ?></div>
				</a>
			</div>
			<div class="burger_btn_block mobile">
				<button data-btn-open="mobile_menu">
					<img
						src="<?php echo get_template_directory_uri() ?>/assets/images/icons/burger_btn_menu.svg"
						alt="burger button image" />
				</button>
			</div>
		</div>
	</header>