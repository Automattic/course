<?php
/**
 * Title: Homepage Course List Grid
 * Slug: course/course-list-grid-homepage
 * Inserter: yes
 * Categories: sensei-lms
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"100px"}}},"backgroundColor":"primary","className":"course-home-page-responsive-padding","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull course-home-page-responsive-padding has-primary-background-color has-background" style="padding-top:80px;padding-bottom:100px"><!-- wp:group {"backgroundColor":"primary","textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-tertiary-color has-primary-background-color has-text-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"className":"is-style-group-left-border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-group-left-border" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"has-league-gothic-font-family"} -->
<h3 class="has-league-gothic-font-family" style="text-transform:uppercase">COURSE LIST</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"className":"has-system-font-family course-font-color-tertiary","fontSize":"xx-small"} -->
<p class="has-system-font-family course-font-color-tertiary has-link-color has-xx-small-font-size"><a href="http://test.test">Explore all courses</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"offset":0,"postType":"course","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"3"},"displayLayout":{"type":"flex","columns":3},"textColor":"tertiary","className":"wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list\u002d\u002dis-grid-view","layout":{"inherit":true}} -->
<div class="wp-block-query wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list--is-grid-view has-tertiary-color has-text-color"><!-- wp:post-template {"align":"full"} -->
<!-- wp:group {"layout":{"contentSize":"330px","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"210px","lock":{"move":true},"align":"left"} /-->

<!-- wp:sensei-lms/course-categories {"textAlign":"left","options":{},"className":"has-system-font-family","fontSize":"3x-small","style":{"typography":{"lineHeight":"1.4"},"spacing":{"margin":{"top":"4px","right":"0","bottom":"0","left":"0"}}}} -->
<div style="margin-top:4px;margin-right:0;margin-bottom:0;margin-left:0;line-height:1.4" class="wp-block-sensei-lms-course-categories has-text-align-left has-system-font-family has-3-x-small-font-size"></div>
<!-- /wp:sensei-lms/course-categories -->

<!-- wp:post-title {"textAlign":"left","isLink":true,"lock":{"move":true},"style":{"typography":{"fontSize":"36px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}}} /-->

<!-- wp:post-author {"textAlign":"left","lock":{"move":true},"style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"className":"has-system-font-family","fontSize":"xx-small"} /-->

<!-- wp:post-excerpt {"textAlign":"left","lock":{"move":true},"style":{"spacing":{"padding":{"top":"22px","right":"0px","bottom":"12px","left":"0px"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.3"}},"className":"has-eb-garamond-font-family","fontSize":"small"} /-->

<!-- wp:group {"textColor":"primary","fontSize":"x-small"} -->
<div class="wp-block-group has-primary-color has-text-color has-x-small-font-size"><!-- wp:sensei-lms/course-actions {"lock":{"move":false,"remove":false}} -->
<!-- wp:sensei-lms/button-take-course {"align":"full","borderRadius":8,"backgroundColor":"tertiary","textColor":"primary"} -->
<div class="wp-block-sensei-lms-button-take-course is-style-default wp-block-sensei-button wp-block-button has-text-align-full"><button class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px">Start Course</button></div>
<!-- /wp:sensei-lms/button-take-course -->

<!-- wp:sensei-lms/button-continue-course {"align":"full","borderRadius":8,"backgroundColor":"tertiary","textColor":"primary"} -->
<div class="wp-block-sensei-lms-button-continue-course is-style-default wp-block-sensei-button wp-block-button has-text-align-full"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px">Continue</a></div>
<!-- /wp:sensei-lms/button-continue-course -->

<!-- wp:sensei-lms/button-view-results {"align":"full","borderRadius":8,"className":"is-style-default","backgroundColor":"tertiary","textColor":"primary"} -->
<div class="wp-block-sensei-lms-button-view-results is-style-default wp-block-sensei-button wp-block-button has-text-align-full"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px">Visit Results</a></div>
<!-- /wp:sensei-lms/button-view-results -->
<!-- /wp:sensei-lms/course-actions --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->