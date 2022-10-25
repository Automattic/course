<?php
/**
 * Title: Blog Posts
 * Slug: course/blog-posts
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained","contentSize":"1000px"}} -->
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