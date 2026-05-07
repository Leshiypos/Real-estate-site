	<!-- MARK: FOOTER -->
	<?php
	$footer_option = get_field("footer", 'option') ?? [];
	$link_to_privacy_police_footer = $footer_option['link_to_privacy_police'] ?? "";

	$contacts_page = get_field('contacts_page') ?? [];
	$is_active_local_contacts  = $contacts_page['active_local_contacts'];

	if ($is_active_local_contacts) {
		$contacts_footer = $contacts_page ?? [];
	} else {
		$contacts_footer = get_field('contacts', 'option') ?? [];
	}

	$phone_number = $contacts_footer['number_phone'] ?? '';
	$address = $contacts_footer['address'] ?? '';
	$socials = $contacts_footer['socials'] ?? [];

	?>
	<footer>
		<div class="wrap_footer">
			<div class="privacy_block fade_in">
				<p class="yer">Ⓒ <?php echo date('Y'); ?></p>
				<a href="<?php echo $link_to_privacy_police_footer; ?>">Privacy Policy</a>
			</div>

			<div class="header_block fade_in">
				<div class="footer_menu">
					<ul>
						<li><a href="#start_page">HOME</a></li>
						<li><a href="#about">ABOUT BUILDING</a></li>
						<li><a href="#gallery">GALLERY</a></li>
						<li><a href="#plans">FLOORS PLANS</a></li>
						<li><a href="#tour">VIRTUAL TOUR</a></li>
					</ul>
				</div>
				<div class="btn_block">
					<a href="#start_page">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/btn_top.svg" alt="" />
					</a>
				</div>
			</div>

			<div class="contact_block fade_in">
				<div class="col col_btn">
					<a href="#">Submit a request
						<img
							src="<?php echo get_template_directory_uri() ?>/assets/images/icons/request_arrow.svg"
							alt=" arrow icon" /></a>
				</div>

				<div class="col col_info fade_in">
					<ul>
						<li>
							<div class="label">
								office
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/star_point.svg" alt="" />
							</div>

							<div class="info">
								<?php echo $address; ?>
							</div>
						</li>
						<li>
							<div class="label">
								phone
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/star_point.svg" alt="" />
							</div>

							<div class="info">
								<a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="bottom_block">
				<div class="col col_log">
					<div class="row row_title">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/fernandes_logo.svg" alt="" />
						Fernandes <br />Media
					</div>
					<div class="row row_post_title">Website development</div>
				</div>

				<div class="col col_socials">
					<?php
					if (!empty($socials)) {

					?>
						<ul>
							<?php
							foreach ($socials as $social) {
								$label = $social['label'] ?? "";
								$link = $social['link'] ?? "#";
							?>
								<li>
									<a href="<?php echo esc_attr($link); ?>"><?php echo $label; ?>
										<img
											src="<?php echo get_template_directory_uri() ?>/assets/images/icons/social_icon.svg"
											alt="social icon" /></a>
								</li>
							<?php
							}
							?>

						</ul>
					<?php
					}
					?>

				</div>

				<div class="col btn_block_mobile">
					<a href="#start_page">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/btn_top.svg" alt="" />
					</a>
				</div>
			</div>
		</div>
	</footer>
	</main>
	<div
		class="menu_mobile_block"
		id="menu_mobile_block"
		data-block-closable="mobile_menu">
		<div class="wrap_menu">
			<div class="header_block">
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo_accent.avif" alt="logo" />
				</a>

				<button data-btn-close>
					<svg
						role="presentation"
						class="t-popup__close-icon"
						width="23px"
						height="23px"
						viewBox="0 0 23 23"
						version="1.1"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink">
						<g
							stroke="none"
							stroke-width="1"
							fill="#848da2"
							fill-rule="evenodd">
							<rect
								transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
								x="10.3137085"
								y="-3.6862915"
								width="2"
								height="30"></rect>
							<rect
								transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
								x="10.3137085"
								y="-3.6862915"
								width="2"
								height="30"></rect>
						</g>
					</svg>
				</button>
			</div>
			<nav class="mobile_menu">
				<ul>
					<li><a href="#start_page">HOME</a></li>
					<li><a href="#about">ABOUT BUILDING</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#plans">FLOORS PLANS</a></li>
					<li><a href="#tour">VIRTUAL TOUR</a></li>
				</ul>
			</nav>
			<div class="socials_block">
				<ul>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/mail.svg" alt="mail" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/wa-menu.svg" alt="whatsapp" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/inst.svg" alt="instagram" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg" alt="telegram" />
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>

	</body>

	<!-- MARK: MODAL POPUP -->
	<div class="popUp" data-block-closable="pop_up">
		<div class="wrap_popUp">
			<div class="col col_img">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/pop_img.avif" alt="background" />
			</div>

			<div class="col col_form">
				<div class="rwo btn_row">
					<button data-btn-close>
						<img
							src="<?php echo get_template_directory_uri() ?>/assets/images/icons/popUp_btn_close.svg"
							alt="button close" />
					</button>
				</div>
				<div class="row form_row">
					<h2>
						Get a presentation <br />
						<span>of our properties</span>
					</h2>

					<form action="" id="popUp_form" method="post" data-action="send_mail">
						<?php wp_nonce_field('send_mail', 'send_mail_wpnonce'); ?>
						<div class="wrap_input">
							<input
								type="tel"
								class="phone"
								name="phone"
								id="phone"
								required />
						</div>
						<div class="message_send_status"></div>
						<input type="submit" value="GET A PRESENTATION" />
					</form>
					<div class="pivacy_block">
						<p>
							By clicking the button, you agree to the
							<a href="#">Privacy Policy</a>
						</p>
					</div>
				</div>
				<div class="row row_social">
					<ul>
						<li>
							<a href="#">telegram
								<img
									src="<?php echo get_template_directory_uri() ?>/assets/images/icons/social_icon.svg"
									alt="social icon" /></a>
						</li>
						<li>
							<a href="#">whatsapp
								<img
									src="<?php echo get_template_directory_uri() ?>/assets/images/icons/social_icon.svg"
									alt="social icon" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="overlay" data-btn-close></div>
	</div>

	</html>