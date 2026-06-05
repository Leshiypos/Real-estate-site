<?php

add_action('init', function () {
	if (!function_exists('pll_register_string')) {
		return;
	}

	$strings = [
		// Header / Menu
		'menu_home' => 'HOME',
		'menu_about' => 'ABOUT BUILDING',
		'menu_gallery' => 'GALLERY',
		'menu_plans' => 'FLOORS PLANS',
		'menu_payment' => 'PAYMENT PLAN',
		'menu_virtual' => 'VIRTUAL TOUR',
		'menu_location' => 'LOCATION',
		'menu_amenities' => 'AMENITIES',

		// Buttons
		'btn_leave_request' => 'Leave a request',
		'btn_learn_more' => 'Learn More',
		'btn_get_offer' => 'Get Offer',
		'btn_book_viewing' => 'Book a viewing',
		'btn_submit_request' => 'Submit a request',

		// Floor filters
		'filter_all' => 'All',
		'filter_bedroom' => 'Bedroom',

		// Footer
		'footer_privacy_policy' => 'Privacy Policy',
		'footer_office' => 'office',
		'footer_phone' => 'phone',
		'footer_website_development' => 'Website development',

		// Popup
		'popup_get_presentation' => 'Get a presentation',
		'popup_properties' => 'of our properties',
		'popup_agree_text' => 'By clicking the button, you agree to the',

		// Social labels
		'social_telegram' => 'telegram',
		'social_whatsapp' => 'whatsapp',



	];

	foreach ($strings as $name => $string) {
		pll_register_string($name, $string, 'real_estate');
	}
});
