<?php
/**
 * Title: Homepage Course List
 * Slug: course/course-list-homepage
 * Inserter: yes
 * Categories: sensei-lms
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"20px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:80px;padding-bottom:20px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group has-tertiary-color has-primary-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontFamily":"league-gothic"} -->
<h3 class="has-league-gothic-font-family" style="text-transform:uppercase">COURSE LIST</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontSize":"xx-small","fontFamily":"system"} -->
<p class="has-link-color has-system-font-family has-xx-small-font-size"><a href="http://test.test">Explore all courses</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"offset":0,"postType":"course","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"2","inherit":false},"displayLayout":{"type":"list"},"className":"wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list\u002d\u002dis-list-view","layout":{"inherit":true}} -->
<div class="wp-block-query wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list--is-list-view"><!-- wp:post-template {"align":"full"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"20px"}},"textColor":"tertiary"} -->
<div class="wp-block-columns are-vertically-aligned-top has-tertiary-color has-text-color"><!-- wp:column {"verticalAlignment":"top","width":"30%","layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"350px","align":"center","style":{"border":{"width":"1px","radius":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"45%","style":{"spacing":{"blockGap":"20px"}},"layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"},"fontFamily":"system"} -->
<div class="wp-block-group has-system-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:sensei-lms/course-categories {"options":{"backgroundColor":"#f8f5f3","textColor":"#00594F"},"style":{"typography":{"textTransform":"uppercase","fontSize":"0.6875rem"},"spacing":{"padding":{"top":"0","right":"0"}}}} -->
<div style="padding-top:0;padding-right:0;font-size:0.6875rem;text-transform:uppercase;--sensei-lms-course-categories-background-color:#f8f5f3;--sensei-lms-course-categories-text-color:#00594F" class="wp-block-sensei-lms-course-categories"></div>
<!-- /wp:sensei-lms/course-categories --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"uppercase"}},"fontFamily":"league-gothic"} /-->

<!-- wp:post-author {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontSize":"xx-small","fontFamily":"system"} /-->

<!-- wp:post-excerpt {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontFamily":"eb-garamond"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:sensei-lms/course-actions -->
<!-- wp:sensei-lms/button-take-course {"align":"center","borderRadius":8,"buttonClassName":[],"backgroundColor":"tertiary","textColor":"primary"} -->
<div class="wp-block-sensei-lms-button-take-course is-style-default wp-block-sensei-button wp-block-button has-text-align-center"><button class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background" style="border-radius:8px">Start Course</button></div>
<!-- /wp:sensei-lms/button-take-course -->

<!-- wp:sensei-lms/button-continue-course {"align":"center","borderRadius":8,"buttonClassName":[],"backgroundColor":"primary","textColor":"tertiary"} -->
<div class="wp-block-sensei-lms-button-continue-course is-style-default wp-block-sensei-button wp-block-button has-text-align-center"><a class="wp-block-button__link has-tertiary-color has-primary-background-color has-text-color has-background" style="border-radius:8px">Continue</a></div>
<!-- /wp:sensei-lms/button-continue-course -->

<!-- wp:sensei-lms/button-view-results {"align":"center","borderRadius":8,"buttonClassName":[],"className":"is-style-default"} -->
<div class="wp-block-sensei-lms-button-view-results is-style-default wp-block-sensei-button wp-block-button has-text-align-center"><a class="wp-block-button__link" style="border-radius:8px">Visit Results</a></div>
<!-- /wp:sensei-lms/button-view-results -->
<!-- /wp:sensei-lms/course-actions --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->