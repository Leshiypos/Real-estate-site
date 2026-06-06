<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package real_estate
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class("default_page_section"); ?>>
	<div class="wrap_section">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>


		<?php
		the_content();
		?>

	</div>
</section><!-- #post-<?php the_ID(); ?> -->