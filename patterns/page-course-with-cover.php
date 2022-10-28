<?php

/**
 * Title: Landing Page with featured image
 * Slug: course/landing-page
 * Categories: sensei-lms
 * Block Types: sensei-lms/post-content
 * Inserter: yes
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","className":"landing-page__cover stick-on-top  is-style-page-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull landing-page__cover stick-on-top is-style-page-header has-primary-background-color has-background">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"1000px","wideSize":"1001px"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"isStackedOnMobile":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary"} -->
    <div class="wp-block-columns alignfull is-not-stacked-on-mobile has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
      <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
      <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
        <!-- wp:group {"className":"landing-page-navigation","layout":{"type":"constrained"}} -->
        <div class="wp-block-group landing-page-navigation">
          <!-- wp:post-title {"style":{"typography":{"textTransform":"uppercase","lineHeight":0.9}},"textColor":"background","fontSize":"3x-large"} /-->

          <!-- wp:sensei-lms/button-take-course {"className":"is-style-secondary"} -->
          <div class="wp-block-sensei-lms-button-take-course is-style-secondary wp-block-sensei-button wp-block-button has-text-align-left"><button class="wp-block-button__link">Take Course</button></div>
          <!-- /wp:sensei-lms/button-take-course -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"50%","backgroundColor":"primary","layout":{"type":"constrained","contentSize":"","wideSize":"","justifyContent":"left"}} -->
      <div class="wp-block-column has-primary-background-color has-background" style="flex-basis:50%">
        <!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":50,"minHeightUnit":"rem","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:50rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
          <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"></p>
            <!-- /wp:paragraph -->
          </div>
        </div>
        <!-- /wp:cover -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"course/author"} /-->
<!-- wp:pattern {"slug":"course/learn"} /-->
<!-- wp:pattern {"slug":"course/teacher"} /-->
<!-- wp:pattern {"slug":"course/work"} /-->
<!-- wp:pattern {"slug":"course/student"} /-->
<!-- wp:pattern {"slug":"course/lesson-list"} /-->