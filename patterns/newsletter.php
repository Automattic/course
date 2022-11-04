    <?php
    /**
     * Title: Newsletter text 
     * Slug: course/newsletter
     * Inserter: yes
     */
    ?>
    <!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group">
      <!-- wp:heading {"fontSize":"medium"} -->
      <h2 class="has-medium-font-size"><?php echo esc_html__('NEWSLETTER', 'course');?></h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p><?php echo esc_html__('Our latest updates in your e-mail.', 'course'); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"1.25rem"}}}} -->
      <p style="padding-top:1.25rem"><a href="#"><?php echo esc_html__('Sign up', 'course'); ?></a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->