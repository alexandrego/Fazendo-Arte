<?php
  get_header();
  get_template_part('partials/post', 'header');
?>
  <div class="container" id="container">
    <div class="row container-row">
      <div class="col-sm-12 container-column">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      
      <?php
        if(has_post_thumbnail()) :
          the_post_thumbnail();
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
    </div>
  </div>
<?php
  get_footer();
?>