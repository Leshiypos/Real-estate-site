<?php
// Template Name: Page template
// Template Post Type: page 

get_header();
?>
<main>
	<!-- MARK: HERO SECTION -->

	<section class="hero_section" style="margin-bottom: 200px">
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
					src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_video.mp4"
					type="video/mp4"
					media="(min-width: 1001px)" />
				<source
					src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_video.mp4"
					type="video/mp4"
					media="(max-width: 1000px)" />
			</video>

			<div class="logo_block desktop fade_in">

				<div class="logo_description fade_in">404. Что-то пошло не так</div>
			</div>
			<div class="content_block">
				<div class="wrap_content_block">
					<div class="col btn_block fade_in">
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
					</div>

					<div class="col qr_block fade_in">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/QRcode.avif" alt="qr code" />
					</div>

				</div>
			</div>
			<div class="glass_line liquid-glass liquid-glass-fallback"></div>
		</div>
	</section>



	<?php
	get_footer();
	?>