<?php
get_header();
?>
<main>
	<!-- MARK: HERO SECTION -->
	<section class="hero_section">
		<div class="wrap_section">
			<video
				class="video_background"
				poster=""
				muted
				autoplay
				playsinline
				loop>
				<!-- Десктоп -->
				<source
					src="<?php echo get_template_directory_uri() ?>/assets/video/hero_video.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<source
					src="<?php echo get_template_directory_uri() ?>/assets/video/hero_video.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>
			<div class="logo_block desktop fade_in">
				<img
					src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo_hero_section.svg"
					alt="hero lofo" />
				<div class="logo_description fade_in">Daynemic Offer Here</div>
			</div>
			<div class="content_block">
				<div class="wrap_content_block">
					<div class="col btn_block fade_in">
						<a href="#" class="btn white" data-btn-open="pop_up">
							<div class="btn_wrap">Leave a request</div>
						</a>
						<a
							href="#"
							class="btn glass whith_arrow fade_in"
							data-btn-open="pop_up">
							<p>Learn More</p>
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag_black.avif"
								alt="arrow" />
						</a>
					</div>
					<div class="col qr_block fade_in">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/QRcode.avif" alt="qr code" />
					</div>
					<div class="col col_logo_block fade_in">
						<img
							src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo_hero_section.svg"
							alt="hero lofo" />
						<div class="logo_description">Daynemic Offer Here</div>
					</div>
				</div>
			</div>
			<div class="glass_line liquid-glass liquid-glass-fallback"></div>
		</div>
	</section>

	<!-- MARK: ABOUT SECTION -->
	<section class="about_section" id="about">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2>About Building</h2>
				</div>
				<div class="col col_post-title">
					<p>
						Spanning over 61,000 sq.ft., the leisure deck of the podium
						level offers a haven of well-being and fun for all, including a
						large fully equipped gymnasium, infinity pool, outdoor gym,
						padel courts, pickleball/basketball court, barbecue area and a
						selection of seating and lounge areas.
					</p>
				</div>
			</div>
			<div class="content_block fade_in">
				<div class="col col_gallery">
					<div class="swiper gallery">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery_slide_1.avif" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery_slide_2.avif" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/gallery_slide_3.avif" />
							</div>
						</div>
					</div>
					<div class="swiper thumb_slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/thumb_1.avif" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/thumb_2.avif" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/thumb_3.avif" />
							</div>
						</div>
					</div>
				</div>
				<div class="col col_description">
					<ul>
						<li>
							<div class="label">Towers</div>
							<div class="value">
								<div class="wrap_value">2</div>
							</div>
						</li>

						<li>
							<div class="label">Floors</div>
							<div class="value">
								<div class="wrap_value">10</div>
							</div>
						</li>

						<li>
							<div class="label">Handover</div>
							<div class="value">
								<div class="wrap_value">Q2 2026</div>
							</div>
						</li>

						<li>
							<div class="label">Starting Price</div>
							<div class="value">
								<div class="wrap_value">AED 1 047 000</div>
							</div>
						</li>

						<li>
							<div class="label">Bedrooms</div>
							<div class="value">
								<div class="wrap_value">1-2</div>
							</div>
						</li>

						<li>
							<div class="label">Areaa from</div>
							<div class="value">
								<div class="wrap_value">36 m²</div>
							</div>
						</li>

						<li>
							<div class="label">Payment Plan</div>
							<div class="value">
								<div class="wrap_value">40/60</div>
							</div>
						</li>
					</ul>
					<div class="btn_block">
						<a
							href="#"
							class="btn accent whith_arrow"
							data-btn-open="pop_up">
							<p>Get Offer</p>
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MARK: GALLERY SECTION -->
	<section class="gallery_section" id="gallery">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2>Gallery</h2>
				</div>
				<div class="col col_description">
					<h3>Interior of main living room</h3>
					<p>
						Following the overwhelming demand for Phase these two towers
						arrive as an even more
					</p>
				</div>
			</div>
			<div class="gallery_block fade_in">
				<div class="swiper gallery_section_slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_1.avif"
								alt="images" />
						</div>
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_2.avif"
								alt="images" />
						</div>
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_1.avif"
								alt="images" />
						</div>
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_2.avif"
								alt="images" />
						</div>
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_1.avif"
								alt="images" />
						</div>
						<div class="swiper-slide">
							<img
								src="<?php echo get_template_directory_uri() ?>/assets/images/slide_section_2.avif"
								alt="images" />
						</div>
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
		</div>
	</section>

	<!-- MARK: FLOOR PLANS SECTION -->
	<section class="floor-plans_section" id="plans">
		<div class="wrap_section">
			<div class="header_block fade_in">
				<div class="col col_title">
					<h2>Floor Plans</h2>
				</div>
				<div class="col col_filter-btns">
					<ul>
						<li>
							<button class="active_btn" data-filter="all">All</button>
						</li>
						<li>
							<button data-filter="1">1 Bedroom</button>
						</li>
						<li>
							<button data-filter="2">2 Bedroom</button>
						</li>
						<li>
							<button data-filter="3">3 Bedroom</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="content_block fade_in">
				<!-- card -->
				<div class="content_card" data-type="1">
					<div class="col col_description">
						<div class="wrap_img">
							<a
								href="<?php echo get_template_directory_uri(); ?>/assets/images/plan_img.avif"
								class="glightbox"
								data-gallery="plans">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/plan_img.avif" alt="plan" />
							</a>
						</div>
						<div class="info_block">
							<div class="wrap_info_block">
								<h3>Tower A</h3>
								<div class="post_title">Total area from: 3,049 ft2</div>
								<div class="descr">
									The Row Saadiyat is a landmark residential destination
									located within Abu Dhabi’s Saadiyat Cultural District, one
									of the world’s most prominent cultural hubs.
								</div>
							</div>
						</div>
					</div>
					<div class="col col_price">
						<div class="wrap_col_price">
							<div class="price">AED 11,274,000</div>
							<div class="post_title">Starting price</div>
							<div class="btn_block">
								<a
									href="#"
									class="btn accent whith_arrow"
									data-btn-open="pop_up">
									<p>Get Offer</p>
									<img
										src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif"
										alt="arrow" />
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- card -->
				<div class="content_card" data-type="2">
					<div class="col col_description">
						<div class="wrap_img">
							<a
								href="<?php echo get_template_directory_uri(); ?>/assets/images/plan_img.avif"
								class="glightbox"
								data-gallery="plans">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/plan_img.avif" alt="plan" />
							</a>
						</div>
						<div class="info_block">
							<div class="wrap_info_block">
								<h3>Tower B</h3>
								<div class="post_title">Total area from: 3,049 ft2</div>
								<div class="descr">
									The Row Saadiyat is a landmark residential destination
									located within Abu Dhabi’s Saadiyat Cultural District, one
									of the world’s most prominent cultural hubs.
								</div>
							</div>
						</div>
					</div>
					<div class="col col_price">
						<div class="wrap_col_price">
							<div class="price">AED 11,274,000</div>
							<div class="post_title">Starting price</div>
							<div class="btn_block">
								<a href="#" class="btn accent whith_arrow">
									<p>Get Offer</p>
									<img
										src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif"
										alt="arrow" />
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- card -->
				<div class="content_card" data-type="3">
					<div class="col col_description">
						<div class="wrap_img">
							<a
								href="<?php echo get_template_directory_uri(); ?>/assets/images/plan_img.avif"
								class="glightbox"
								data-gallery="plans">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/plan_img.avif" alt="plan" />
							</a>
						</div>
						<div class="info_block">
							<div class="wrap_info_block">
								<h3>Tower С</h3>
								<div class="post_title">Total area from: 3,049 ft2</div>
								<div class="descr">
									The Row Saadiyat is a landmark residential destination
									located within Abu Dhabi’s Saadiyat Cultural District, one
									of the world’s most prominent cultural hubs.
								</div>
							</div>
						</div>
					</div>
					<div class="col col_price">
						<div class="wrap_col_price">
							<div class="price">AED 11,274,000</div>
							<div class="post_title">Starting price</div>
							<div class="btn_block">
								<a
									href="#"
									class="btn accent whith_arrow"
									data-btn-open="pop_up">
									<p>Get Offer</p>
									<img
										src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif"
										alt="arrow" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MARK: PAYMENT PLAN SECTION -->
	<section class="payment_plan_section">
		<div class="wrap_section">
			<div class="col col_header">
				<h2 class="fade_in">Payment Plan</h2>
				<div class="post_title fade_in">
					The Row Saadiyat is a landmark residential destination located
					within Abu Dhabi’s Saadiyat Cultural District, one of the world’s
					most prominent cultural hubs.
				</div>
				<div class="btn_block fade_in">
					<a href="#" class="btn accent whith_arrow" data-btn-open="pop_up">
						<p>Get Offer</p>
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
					</a>
				</div>
			</div>

			<div class="col col_plan-info">
				<div class="vertical_line"></div>
				<ul class="fade_in">
					<li>
						<div class="price">
							<div class="wrap">50K</div>
						</div>
						<div class="title">
							<div class="wrap">Reservation free</div>
						</div>

						<div class="istallment">
							<div class="wrap">1st Installment</div>
						</div>
					</li>

					<li>
						<div class="price">
							<div class="wrap">20%</div>
						</div>
						<div class="title">
							<div class="wrap">within 14 days of reservation</div>
						</div>

						<div class="istallment">
							<div class="wrap">2st Installment</div>
						</div>
					</li>

					<li>
						<div class="price">
							<div class="wrap">20%</div>
						</div>
						<div class="title">
							<div class="wrap">within 6 months of reservation</div>
						</div>

						<div class="istallment">
							<div class="wrap">3st Installment</div>
						</div>
					</li>
					<li>
						<div class="price">
							<div class="wrap">60%</div>
						</div>
						<div class="title">
							<div class="wrap">upon completion</div>
						</div>

						<div class="istallment">
							<div class="wrap">4st Installment</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="btn_block_mobile">
				<a href="#" class="btn accent whith_arrow" data-btn-open="pop_up">
					<p>Get Offer</p>
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow_diag.avif" alt="arrow" />
				</a>
			</div>
		</div>
	</section>

	<!-- MARK: 3D plan section-->

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

	<!-- MARK: MAP SECTION -->
	<section class="map_section fade_in">
		<div class="wrap_section">
			<!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/map_img.avif" alt="map image" /> -->
			<script
				type="text/javascript"
				charset="utf-8"
				async
				src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3e9ddd17b8321685016795e08d5d440351e6e19a3fd121ec53718b3b85fcb199&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
	</section>
	<?php
	get_footer();
	?>