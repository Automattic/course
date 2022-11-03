<?php
/**
 * Title: Default footer
 * Slug: course/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"0px","right":"20px","left":"20px"}},"border":{"top":{"width":"1px"}}},"backgroundColor":"background","textColor":"primary","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-primary-color has-background-background-color has-text-color has-background" style="border-top-width:1px;padding-top:80px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"81.7%","style":{"typography":{"lineHeight":"1.3"}}} -->
<div class="wp-block-column" style="line-height:1.3;flex-basis:81.7%"><!-- wp:columns {"style":{"border":{"left":{"width":"1px"}},"spacing":{"padding":{"left":"20px"},"blockGap":{"top":"10px","left":"20px"}}},"className":"course-footer-links-vertical-space"} -->
<div class="wp-block-columns course-footer-links-vertical-space" style="border-left-width:1px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":"128px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:128px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"className":"has-gothic-font-family","fontSize":"medium"} -->
<h3 class="has-gothic-font-family has-medium-font-size" style="line-height:1;text-transform:uppercase"><?php echo esc_html__('social', 'course');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"fontFamily":"eb-garamond"} -->
<div class="wp-block-group has-eb-garamond-font-family"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__('Instagram', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Youtube', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Spotify', 'course');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"border":{"left":{"width":"1px"}},"spacing":{"padding":{"left":"20px"},"margin":{"bottom":"20px","top":"20px"},"blockGap":{"top":"10px","left":"20px"}}}} -->
<div class="wp-block-columns" style="border-left-width:1px;margin-top:20px;margin-bottom:20px;padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":"128px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:128px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"fontSize":"medium"} -->
<h3 class="has-medium-font-size" style="line-height:1;text-transform:uppercase"><?php echo esc_html__('pages', 'course');?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap"},"fontFamily":"eb-garamond"} -->
<div class="wp-block-group has-eb-garamond-font-family" style="border-style:none;border-width:0px"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__('About', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Video', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Episodes', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('All Posts', 'course');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"14.5%"} -->
<div class="wp-block-column" style="flex-basis:14.5%"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Terms', 'course');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__('Privacy', 'course');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:site-title {"textAlign":"center","style":{"typography":{"lineHeight":"1","letterSpacing":"0.02em"},"spacing":{"padding":{"top":"40px"}}},"fontFamily":"sorts-mill-goudy"} /-->

<!-- wp:group {"align":"full","style":{"border":{"top":{"width":"1px"}}},"backgroundColor":"background","className":"course-negative-space-footer","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull course-negative-space-footer has-background-background-color has-background" style="border-top-width:1px"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.02em"},"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"background","fontSize":"xx-small","fontFamily":"system"} -->

<p class="has-text-align-center has-background-background-color has-background has-system-font-family has-xx-small-font-size" style="padding-top:80px;padding-bottom:80px;letter-spacing:0.02em">
<?php
    /* Translators: WordPress link. */
    $wordpress_link_underlined = '<a href="' . esc_url( __( 'https://wordpress.org', 'course' ) ) . '" rel="nofollow"><span style="text-decoration: underline;">WordPress</span></a>';

    /* Translators: Sensei link. */
    $sensei_link = '<a href="' . esc_url( __( 'https://senseilms.com/', 'course' ) ) . '" rel="nofollow">Sensei</a>';

    /* Translators: Name of the theme. */
    $theme_name_underlined = '<span style="text-decoration: underline;">' . esc_html__('Course Theme', 'course') .'</span>';

    echo sprintf(
        esc_html__( '%1$s by %2$s, Powered by %3$s.', 'course' ),
        $theme_name_underlined,
        $sensei_link,
        $wordpress_link_underlined
    );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->