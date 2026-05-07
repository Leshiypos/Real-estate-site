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
			<a href="/" class="logo">
				<img src="<?php echo $logo; ?>" alt="logo" />
			</a>
			<nav class="main_menu desktop">
				<ul>
					<li><a href="#start_page">HOME</a></li>
					<li><a href="#about">ABOUT BUILDING</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#plans">FLOORS PLANS</a></li>
					<li><a href="#tour">VIRTUAL TOUR</a></li>
				</ul>
			</nav>
			<div class="btn_block desktop">
				<a href="#" class="btn accent" data-btn-open="pop_up">
					<div class="btn_wrap">Book a viewing</div>
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