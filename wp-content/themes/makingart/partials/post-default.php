<div class="row py-3">
  <div class="col-sm-4">
    <?php
      if(has_post_thumbnail()) :
        the_post_thumbnail('medium', array('class' => 'img-fluid'));
      endif;
    ?>
  </div>

    <div class="col-sm-8">
      <h3>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h3>

      <p><?php the_category(', '); ?> | Publicado por: <?php the_author(); ?> | <?php the_time('d/m/Y') ?></p>

      <div>
        <?php the_content(); ?>

        <p><?php the_tags('Tags: ', ', ', ''); ?></p>

        <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>">Leia mais</a></p>
      </div>
    </div>
  </div>
</div>