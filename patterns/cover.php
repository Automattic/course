<?php

/**
 * Title: Cover for courses
 * Slug: course/cover
 * Categories: Cover
 */
?>
<!-- wp:group {"backgroundColor":"primary","className":"landing-page__cover stick-on-top","layout":{"type":"default"}} -->
<div class="wp-block-group landing-page__cover stick-on-top has-primary-background-color has-background">
  <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"primary"} -->
  <div class="wp-block-columns is-not-stacked-on-mobile has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:group {"style":{"spacing":{"padding":{"left":"clamp(1.31rem, 9.88vw + -1.16rem, 6.25rem)"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="padding-left:clamp(1.31rem, 9.88vw + -1.16rem, 6.25rem)">
        <!-- wp:post-title {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"3x-large"} /-->

        <!-- wp:sensei-lms/button-take-course {"className":"is-style-secondary"} -->
        <div class="wp-block-sensei-lms-button-take-course is-style-secondary wp-block-sensei-button wp-block-button has-text-align-left"><button class="wp-block-button__link">Take Course</button></div>
        <!-- /wp:sensei-lms/button-take-course -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","backgroundColor":"primary","layout":{"type":"constrained","contentSize":"","wideSize":"","justifyContent":"right"}} -->
    <div class="wp-block-column has-primary-background-color has-background" style="flex-basis:50%">
      <!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":50,"minHeightUnit":"rem","isDark":false} -->
      <div class="wp-block-cover is-light" style="min-height:50rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
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