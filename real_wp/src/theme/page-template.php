<?php
// Template Name: Page template
// Template Post Type: page 

get_header();
?>
<main>
	<!-- MARK: HERO SECTION -->
	<?php
	$hero_section  =  get_field("hero_section") ?: [];
	$logo_url = $hero_section["logo"] ?? get_template_directory_uri() . '/assets/images/icons/logo_hero_section.svg';
	$title = $hero_section["title"] ?? "parameter is not defined";
	$qr_code = $hero_section["qr_code"] ?? "";
	$video_section_url = $hero_section["video_section"] ?? "";
	$image_section_url = $hero_section["image_section"] ?? "";


	?>
	<section class="hero_section">
		<div class="wrap_section">
			<?php if (!empty($video_section_url)) {
			?>
				<video
					class="video_background"
					poster=""
					muted
					autoplay
					playsinline
					loop>
					<!-- Десктоп -->
					<source
						src="<?php echo $video_section_url; ?>"
						type="video/mp4"
						media="(min-width: 1001px)" />
					<source
						src="<?php echo $video_section_url; ?>"
						type="video/mp4"
						media="(max-width: 1000px)" />
				</video>

			<?php

			} else {
			?>
				<img src="<?php echo $image_section_url; ?>" alt="image hero section">

			<?php

			} ?>

			<div class="logo_block desktop fade_in">
				<img
					src="<?php echo $logo_url; ?>"
					alt="hero lofo" />
				<div class="logo_description fade_in"><?php echo $title; ?></div>
			</div>
			<div class="content_block">
				<div class="wrap_content_block">
					<div class="col btn_block fade_in">
						<?php /*
						<a href="#" class="btn white" data-btn-open="pop_up">
							<div class="btn_wrap"><?php pll_e('Leave a request'); ?></div>
						</a>
						<a
							href="#"
							class="btn glass whith_arrow fade_in"
							data-btn-open="pop_up">
							<p><?php pll_e('Learn More'); ?></p>
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag_black.avif"
								alt="arrow" />
						</a>
						*/ ?>
					</div>

					<?php
					if (!empty($qr_code)) {
					?>
						<div class="col qr_block fade_in">
							<img src="<?php echo $qr_code; ?>" alt="qr code" />
						</div>

					<?php
					}
					?>

					<div class="col col_logo_block fade_in">
						<img
							src="<?php echo $logo_url; ?>"
							alt="hero lofo" />
						<div class="logo_description"><?php echo $title; ?></div>
					</div>
				</div>
			</div>
			<div class="glass_line liquid-glass liquid-glass-fallback"></div>
		</div>
	</section>

	<!-- MARK: ABOUT SECTION -->
	<?php
	$about_section = get_field("about_section") ?? [];
	$title = $about_section["title"] ?? "parameter is not defined";
	$description = $about_section["description"] ?? "parameter is not defined";
	$gallery_about_section = $about_section["gallery"] ?? [];
	$characteristics_about_section = $about_section["characteristics"] ?? [];

	?>
	<section class="about_section" id="about">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2><?php echo $title; ?></h2>
				</div>
				<div class="col col_post-title">
					<p>
						<?php echo $description; ?>
					</p>
				</div>
			</div>
			<div class="content_block fade_in">
				<div class="col col_gallery">
					<?php
					if (!empty($gallery_about_section)) {
					?>
						<div class="swiper gallery">
							<div class="swiper-wrapper">
								<?php
								foreach ($gallery_about_section as $image_id) {
									$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
									if (!$alt) {
										$alt = get_the_title($image_id);
									}
								?>
									<div class="swiper-slide">
										<img
											src="<?php echo wp_get_attachment_image_url($image_id, "full"); ?>"
											alt="<?php echo esc_attr($alt); ?>" />
									</div>

								<?php

								}
								?>
							</div>
						</div>
						<div class="swiper thumb_slider">
							<div class="swiper-wrapper">

								<?php
								foreach ($gallery_about_section as $image_id) {
									$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
									if (!$alt) {
										$alt = get_the_title($image_id);
									}
								?>
									<div class="swiper-slide">
										<img
											src="<?php echo wp_get_attachment_image_url($image_id, "about-section-gallery-thumb"); ?>"
											alt="<?php echo esc_attr($alt); ?>" />
									</div>
								<?php
								}
								?>

							</div>
						</div>
					<?php
					}
					?>
				</div>
				<div class="col col_description">
					<?php

					if (!empty($characteristics_about_section)) {

					?>
						<ul>
							<?php
							foreach ($characteristics_about_section as $charact) {
								$label = $charact['label'] ?? "label is not defined";
								$value = $charact['value'] ?? "value is not defined";
							?>
								<li>
									<div class="label"><?php echo $label; ?></div>
									<div class="value">
										<div class="wrap_value"><?php echo $value; ?></div>
									</div>
								</li>
							<?php
							}
							?>
						</ul>
					<?php
					}
					?>
					<div class="btn_block">
						<a
							href="#"
							class="btn accent whith_arrow"
							data-btn-open="pop_up">
							<p><?php pll_e('Get Offer'); ?></p>
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MARK: GALLERY SECTION -->
	<?php
	$gallery_section = get_field("gallery_section") ?? [];
	$title = $gallery_section['title'] ?? "";
	$post_title = $gallery_section['post_title'] ?? "";
	$description = $gallery_section['description'] ?? "";
	$images = $gallery_section['images'] ?? [];
	?>
	<section class="gallery_section" id="gallery">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2><?php echo $title; ?></h2>
				</div>
				<div class="col col_description">
					<h3><?php echo $post_title; ?></h3>
					<p>
						<?php echo $description; ?>
					</p>
				</div>
			</div>
			<?php
			if (!empty($images)) {
			?>
				<div class="gallery_block fade_in">
					<div class="swiper gallery_section_slider">
						<div class="swiper-wrapper">
							<?php
							foreach ($images as $image_id) {
								$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
								if (!$alt) {
									$alt = get_the_title($image_id);
								}
							?>
								<div class="swiper-slide">
									<img
										src="<?php echo wp_get_attachment_image_url($image_id, "full"); ?>"
										alt="<?php echo esc_attr($alt); ?>" />
								</div>
							<?php
							}
							?>
						</div>
						<div class="btn_block_navigation">
							<div class="swiper-button-gallery-prev">
								<img
									src="<?php echo get_template_directory_uri() ?>/assets/images/icons/btn_prev.svg"
									alt="btn prev" />
							</div>
							<div class="swiper-button-gallery-next">
								<img
									src="<?php echo get_template_directory_uri() ?>/assets/images/icons/btn_next.svg"
									alt="btn next" />
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>

		</div>
	</section>

	<!-- MARK: FLOOR PLANS SECTION -->
	<?php
	$floor_plans_section = get_field("floor_plans_section") ?? [];
	$title = $floor_plans_section["title"] ?? "";
	$apartaments = $floor_plans_section["apartments"] ?? [];

	// Получаем уникальные значения количества комнат для фильтра 
	$froom_count_array = [];
	foreach ($apartaments as $apartament) {
		if (!empty($apartament))
			$froom_count_array[] = $apartament["rooms_count"] ?? "";
	}
	$filter_param = array_values(array_unique($froom_count_array));
	?>
	<section class="floor-plans_section" id="plans">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2><?php echo $title; ?></h2>
				</div>
				<div class="col col_filter-btns">
					<ul>
						<li>
							<button class="active_btn" data-filter="all"><?php pll_e('All'); ?></button>
						</li>
						<?php
						if (!empty($filter_param)) {
							foreach ($filter_param as $room_count) {
						?>
								<li>
									<button data-filter="<?php echo $room_count; ?>"><?php echo $room_count;  ?> <?php pll_e('Bedroom'); ?></button>
								</li>

						<?php
							}
						}
						?>

					</ul>
				</div>
			</div>
			<?php if (!empty($apartaments)) {
			?>
				<div class="content_block fade_in">

					<?php foreach ($apartaments as $apartament) {
						$plan_id = $apartament["plan"];
						$location = $apartament["location"];
						$square_description = $apartament["square_description"];
						$description_room = $apartament["description_room"];
						$price = $apartament["price"];
						$description_price = $apartament["description_price"];
						$rooms_count = $apartament["rooms_count"];

						$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						if (!$alt) {
							$alt = get_the_title($image_id);
						}

					?>
						<div class="content_card" data-type="<?php echo $rooms_count; ?>">
							<div class="col col_description">
								<div class="wrap_img">
									<a
										href="<?php echo wp_get_attachment_image_url($plan_id, "full"); ?>"
										alt="<?php echo $alt; ?>"
										class=" glightbox"
										data-gallery="plans">
										<img src="<?php echo wp_get_attachment_image_url($plan_id, "floor-plan-gallery-thumb");  ?>" alt="plan" />
									</a>
								</div>
								<div class="info_block">
									<div class="wrap_info_block">
										<h3><?php echo $location; ?></h3>
										<div class="post_title"><?php echo $square_description; ?></div>
										<div class="descr">
											<?php echo $description_room; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col col_price">
								<div class="wrap_col_price">
									<div class="price"><?php echo $price; ?></div>
									<div class="post_title"><?php echo $description_price; ?></div>
									<div class="btn_block">
										<a
											href="#"
											class="btn accent whith_arrow"
											data-btn-open="pop_up">
											<p><?php pll_e('Get Offer'); ?></p>
											<img
												src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif"
												alt="arrow" />
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
					} ?>

				</div>
			<?php
			} ?>
		</div>
	</section>

	<!-- MARK: PAYMENT PLAN SECTION -->
	<?php
	$payment_plan_section = get_field("payment_plan_section") ?? [];
	$title = $payment_plan_section["title"] ?? "";
	$description = $payment_plan_section["description"] ?? "";
	$steps = $payment_plan_section["steps"] ?? "";
	?>
	<section class="payment_plan_section">
		<div class="wrap_section">
			<div class="col col_header">
				<h2 class="fade_in"><?php echo $title; ?></h2>
				<div class="post_title fade_in">
					<?php echo $description; ?>
				</div>
				<div class="btn_block fade_in">
					<a href="#" class="btn accent whith_arrow" data-btn-open="pop_up">
						<p><?php pll_e('Get Offer'); ?></p>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
					</a>
				</div>
			</div>

			<div class="col col_plan-info">
				<?php
				if (!empty($steps)) {

				?>
					<div class="vertical_line"></div>
					<ul class="fade_in">
						<?php
						foreach ($steps as $step) {
							$procent = $step["procent"] ?? "";
							$label = $step["label"] ?? "";
							$installment = $step["installment"] ?? "";
						?>
							<li>
								<div class="price">
									<div class="wrap"><?php echo $procent; ?></div>
								</div>
								<div class="title">
									<div class="wrap"><?php echo $label; ?></div>
								</div>

								<div class="istallment">
									<div class="wrap"><?php echo $installment; ?></div>
								</div>
							</li>
						<?php
						}
						?>
					</ul>

				<?php
				}
				?>

			</div>
			<div class="btn_block_mobile">
				<a href="#" class="btn accent whith_arrow" data-btn-open="pop_up">
					<p><?php pll_e('Get Offer'); ?></p>
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
				</a>
			</div>
		</div>
	</section>

	<!-- MARK: 3D plan section-->
	<?php /* ?>
	<section class="virtual_tour_section" id="tour">
		<div class="wrap_section">
			<div class="col col_title">
				<div class="pre_title fade_in">360°</div>
				<h2 class="fade_in">Virtual tour</h2>
				<div class="post_title fade_in">
					Following the overwhelming demand for Phase these two towers
					arrive as an even more
				</div>
				<div class="btn_block fade_in">
					<a href="#" class="btn white whith_arrow" data-btn-open="pop_up">
						<p>Get Offer</p>
						<img
							src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag_accent.avif"
							alt="arrow" />
					</a>
				</div>
			</div>
			<div class="col col_image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/virtual_img.avif" alt="virtual image" />
			</div>
		</div>
	</section>
	<?php */ ?>

	<!-- MARK: MAP SECTION -->
	<?php
	$map_section = get_field("map_section") ?? [];
	$script = $map_section["map_script"] ?? "";

	if (!empty($script)) {
	?>
		<section class="map_section fade_in">
			<div class="wrap_section">
				<?php echo $script; ?>
			</div>
		</section>
	<?php
	}
	?>

	<?php
	get_footer();
	?>