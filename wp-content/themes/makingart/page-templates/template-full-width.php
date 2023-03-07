<?php
/**
 * Template Name: Full Width
 * Template Post Type: page,post
 */
  get_header();
?>
<div class="container pt-5">
  <div class="row">
    <div class="col-sm-12">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1>
          <?php
            the_title();
          ?>
        </h1>
        <div>
          <?php
            the_content();
          ?>
        </div>
        <?php
            endwhile;
          endif;
        ?>
    </div>
  </div>
</div>


<?php
  get_footer();
?>