<?php
/**
 * Title: Default footer
 * Slug: course/footer
 * Inserter: no
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"0px"}},"border":{"top":{"width":"1px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull" style="border-top-width:1px;padding-top:80px;padding-bottom:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"81.7%","style":{"typography":{"lineHeight":"1.3"}}} -->
<div class="wp-block-column" style="line-height:1.3;flex-basis:81.7%"><!-- wp:columns {"style":{"border":{"left":{"width":"1px"}},"spacing":{"padding":{"left":"20px"},"blockGap":{"top":"10px","left":"20px"}}},"className":"course-footer-links-vertical-space"} -->
<div class="wp-block-columns course-footer-links-vertical-space" style="border-left-width:1px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":"128px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:128px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"secondary"} -->
<h3 class="has-secondary-font-family has-medium-font-size" style="font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Social', 'course' );?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"fontFamily":"primary"} -->
<div class="wp-block-group has-primary-font-family"><!-- wp:paragraph -->
<p><a href="https://www.instagram.com/"><?php echo esc_html__( 'Instagram', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://youtube.com"><?php echo esc_html__( 'YouTube', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://spotify.com"><?php echo esc_html__( 'Spotify', 'course' );?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"left":{"width":"1px"}},"spacing":{"padding":{"left":"20px"},"margin":{"bottom":"20px"},"blockGap":{"top":"10px","left":"20px"}}}} -->
<div class="wp-block-columns" style="border-left-width:1px;margin-top:20px;margin-bottom:20px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":"128px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:128px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"secondary"} -->
<h3 class="has-secondary-font-family has-medium-font-size" style="font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Pages', 'course' );?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap"},"fontFamily":"primary"} -->
<div class="wp-block-group has-primary-font-family" style="border-style:none;border-width:0px"><!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'About', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Video', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Episodes', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'All Posts', 'course' );?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"14.5%"} -->
<div class="wp-block-column" style="flex-basis:14.5%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Terms', 'course' );?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Privacy', 'course' );?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:site-title {"textAlign":"center","style":{"typography":{"lineHeight":"1","letterSpacing":"0.02em"},"spacing":{"padding":{"top":"20px"}}},"fontFamily":"sorts-mill-goudy"} /-->

<!-- wp:group {"align":"full","style":{"border":{"top":{"width":"1px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="border-top-width:1px"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.02em"},"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"fontSize":"x-small"} -->

<p class="has-text-align-center has-x-small-font-size" style="padding-top:80px;padding-bottom:80px;letter-spacing:0.02em">
<?php
	echo sprintf(
		wp_kses(
			// translators: %1$s is https://senseilms.com, %2$s is https://wordpress.org.
			__( 'Course Theme by <a href="%1$s" rel="nofollow"><span style="text-decoration: underline;">Sensei</span></a>, Powered by <a href="%2$s" rel="nofollow"><span style="text-decoration: underline;">WordPress</span></a>.', 'course' ),
			[
				'a' => [
					'href' => [],
					'rel' => []
				],
				'span' => [
					'style' => []
				]
			]
		),
		'https://senseilms.com',
		'https://wordpress.org'
	);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
