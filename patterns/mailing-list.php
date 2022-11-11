<?php

/**
 * Title: Mailing List
 * Slug: course/mailing-list
 * Inserter: yes
 * Categories: sensei-lms
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"100px","right":"20px","left":"20px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:20px;padding-bottom:100px;padding-left:20px">
    <!-- wp:group {"style":{"spacing":{"padding":{"left":"38px","top":"20px","bottom":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary"}}},"className":"is-style-group-left-border","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group is-style-group-left-border" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);padding-top:20px;padding-bottom:20px;padding-left:38px">
        <!-- wp:group {"layout":{"type":"constrained","wideSize":"455px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","lineHeight":"1","fontSize":"3rem","letterSpacing":"0.01em"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontFamily":"league-gothic"} -->
            <h2 class="has-text-align-left has-league-gothic-font-family" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:3rem;letter-spacing:0.01em;line-height:1;text-transform:uppercase"><?php echo esc_html__('keep track of the latest news and lessons.', 'course'); ?><br><?php echo esc_html__('Every week in your inbox.', 'course'); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"primary","textColor":"tertiary","style":{"border":{"radius":"8px"}},"fontSize":"x-small"} -->
            <div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link has-tertiary-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px"><?php echo esc_html__('JOIN OUR MAILING LIST', 'course'); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->