<?php
/**
 * Title: Default footer
 * Slug: course/footer
 * Inserter: no
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","textColor":"primary","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-primary-color has-background-background-color has-text-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h3 style="text-transform:uppercase">pages</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontFamily":"eb-garamond"} -->
<div class="wp-block-group has-eb-garamond-font-family" style="border-style:none;border-width:0px"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">About</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Video</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Episodes</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>All Posts</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-gothic-font-family"} -->
<h3 class="has-gothic-font-family" style="text-transform:uppercase">social</h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontFamily":"eb-garamond"} -->
<div class="wp-block-group has-eb-garamond-font-family"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Instagram</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Youtube</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Spotify</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","fontSize":"5x-large","fontFamily":"sorts-mill-goudy"} -->
<h2 class="has-text-align-center has-sorts-mill-goudy-font-family has-5-x-large-font-size">COURSE</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--60)","bottom":"var(--wp--preset--spacing--60)"}}}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">
            <?php
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'course' ) ) . '" rel="nofollow">WordPress</a>';
            echo sprintf(
                esc_html__( 'Proudly Powered by %1$s', 'course' ),
                $wordpress_link
            );
            ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
