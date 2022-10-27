<?php

/**
 * Title: List of courses
 * Slug: course/lesson-list
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1000px","wideSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"}} -->
  <div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group">
      <!-- wp:heading {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|50"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"background"} -->
      <h2 class="has-background-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">Course Lessons</h2>
      <!-- /wp:heading -->

      <!-- wp:sensei-lms/course-outline {"className":"is-style-default"} -->
      <!-- wp:sensei-lms/course-outline-lesson {"title":"Lesson 1"} /-->

      <!-- wp:sensei-lms/course-outline-lesson {"title":"Lesson 2"} /-->

      <!-- wp:sensei-lms/course-outline-lesson {"title":"Lesson 3"} /-->
      <!-- /wp:sensei-lms/course-outline -->

      <!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
      <div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:sensei-lms/button-take-course {"className":"is-style-secondary"} -->
        <div class="wp-block-sensei-lms-button-take-course is-style-secondary wp-block-sensei-button wp-block-button has-text-align-left"><button class="wp-block-button__link">Take Course</button></div>
        <!-- /wp:sensei-lms/button-take-course -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->