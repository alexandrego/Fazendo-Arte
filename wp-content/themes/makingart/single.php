<?php
  get_header();
  get_template_part('partials/post', 'header');
?>
<div class="container pt-5" id="loader">
  <div class="row">
    <div class="col-sm-8">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
      <?php
        if(has_post_thumbnail()) :
          the_post_thumbnail('large', array('class' => 'img-fluid'));
        endif;
      ?>

      <h1>
        <?php the_title(); ?></a>
      </h1>

      <p><?php the_category(', '); ?> | <?php the_author(); ?> | <?php the_time('d/m/Y'); ?></p>

      <div>
        <?php the_content(); ?>

        <p><?php the_tags('Tags: ', ', ', ''); ?></p>
      </div>
        <?php
            endwhile;
          endif;

          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>
    </div>
    <div class="col-sm-4">
      <?php
       get_sidebar();
      ?>
    </div>
  </div>
</div>
<?php
  get_footer();
?>