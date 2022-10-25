<?php
/**
 * Title: Homepage
 * Slug: course/homepage
 * Inserter: yes
 * Categories: sensei-lms
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"course-homepage-pattern-parent-group","layout":{"inherit":false,"wideSize":"","contentSize":""}} -->
<div class="wp-block-group alignfull course-homepage-pattern-parent-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained","contentSize":"660px"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"textColor":"primary","fontSize":"3-2x-large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-3-2-x-large-font-size" style="line-height:1;text-transform:uppercase">grow your writing Skills with Course</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"-1%"}},"textColor":"primary","fontSize":"small","fontFamily":"eb-garamond"} -->
<p class="has-text-align-center has-primary-color has-text-color has-eb-garamond-font-family has-small-font-size" style="letter-spacing:-1%">Writing is powerful! Allows you to articulate and explain yourself to others. When done well, it allows you to tell stories that could fascinate millions.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"8px"}},"fontSize":"x-small","fontFamily":"league-gothic"} -->
<div class="wp-block-button has-custom-font-size has-league-gothic-font-family has-x-small-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:8px">START LEARNING NOW</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"primary","textColor":"foreground","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group has-tertiary-color has-primary-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontFamily":"league-gothic"} -->
<h3 class="has-league-gothic-font-family" style="text-transform:uppercase"><?php esc_html_e( 'COURSE LIST', 'course' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontSize":"xx-small","fontFamily":"system"} -->
<p class="has-link-color has-system-font-family has-xx-small-font-size"><a href="http://test.test"><?php esc_html_e( 'Explore all courses', 'course' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"offset":0,"postType":"course","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"2","inherit":false},"displayLayout":{"type":"list"},"className":"wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list\u002d\u002dis-list-view","layout":{"inherit":true}} -->
<div class="wp-block-query wp-block-sensei-lms-course-list wp-block-sensei-lms-course-list--is-list-view"><!-- wp:post-template {"align":"full"} -->
<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":"20px"}},"textColor":"tertiary"} -->
<div class="wp-block-columns are-vertically-aligned-top has-tertiary-color has-text-color"><!-- wp:column {"verticalAlignment":"top","width":"30%","layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"350px","align":"center","style":{"border":{"width":"1px","radius":"4px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"blockGap":"20px"}},"layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"},"fontFamily":"system"} -->
<div class="wp-block-group has-system-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:sensei-lms/course-categories {"options":{"backgroundColor":"#f8f5f3","textColor":"#00594F"},"style":{"typography":{"textTransform":"uppercase","fontSize":"0.6875rem"},"spacing":{"padding":{"top":"0","right":"0"}}}} -->
<div style="padding-top:0;padding-right:0;font-size:0.6875rem;text-transform:uppercase;--sensei-lms-course-categories-background-color:#f8f5f3;--sensei-lms-course-categories-text-color:#00594F" class="wp-block-sensei-lms-course-categories"></div>
<!-- /wp:sensei-lms/course-categories --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"textTransform":"uppercase"}},"fontFamily":"league-gothic"} /-->

<!-- wp:post-author {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontSize":"xx-small","fontFamily":"system"} /-->

<!-- wp:post-excerpt {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"fontFamily":"eb-garamond"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:20%"><!-- wp:group {"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size"><!-- wp:sensei-lms/course-actions -->
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"textColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group has-primary-color has-text-color"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"1px","color":"var:preset|color|primary"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}}} -->
<h3 style="text-transform:uppercase">Blog posts</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"xx-small","fontFamily":"system"} -->
<p class="has-system-font-family has-xx-small-font-size"><a href="http://test.test">Visit the blog</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"20px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"218px","align":"center","style":{"border":{"width":"1px","radius":"4px"}}} /-->

<!-- wp:post-date {"fontSize":"xx-small","fontFamily":"system"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"fontFamily":"eb-garamond"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"80px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:20px;padding-bottom:80px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"40px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|primary"}}},"className":"is-style-group-left-border","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group is-style-group-left-border" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);padding-left:40px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"xx-large"} -->
<h2 class="has-text-align-left has-xx-large-font-size" style="text-transform:uppercase">keep track of the latest<br>news and lessons.<br>Every week in your inbox.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"tertiary","style":{"border":{"radius":"8px"}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link has-tertiary-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px">JOIN OUR MAILING LIST</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","textColor":"foreground","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-foreground-color has-primary-background-color has-text-color has-background" style="padding-top:0px;padding-bottom:0px"><!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"textColor":"tertiary"} -->
<h3 class="has-tertiary-color has-text-color" style="text-transform:uppercase">What students say</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"20px"}},"textColor":"tertiary"} -->
<div class="wp-block-columns has-tertiary-color has-text-color"><!-- wp:column {"verticalAlignment":"bottom","width":"41%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:41%"><!-- wp:image {"id":2150,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="http://sentest.test/wp-content/themes/sensei-theme/assets/images/course-theme-testimonial.png" alt="" class="wp-image-2150" style="border-width:1px;border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"30px"}},"typography":{"textTransform":"uppercase"}},"textColor":"tertiary","fontSize":"x-large"} -->
<h2 class="has-tertiary-color has-text-color has-x-large-font-size" style="margin-bottom:30px;text-transform:uppercase">“I always wanted to write, and<br>thanks to Cours, I got it right. My<br>writing is clearer, and I can finally get my message across.”</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontFamily":"system"} -->
<p class="has-system-font-family" style="font-style:normal;font-weight:500">Christopher Brown</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xx-small","fontFamily":"system"} -->
<p class="has-system-font-family has-xx-small-font-size">Founder at BeautifulWriting.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","textColor":"primary","layout":{"type":"constrained","contentSize":"1200px"}} -->
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