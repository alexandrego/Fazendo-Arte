<?php
  get_header();
  get_template_part('partials/post', 'header');
?>
  <div class="container" id="container">
    <div class="row">
      <div class="col-sm-12">
        <?php
          get_template_part('partials/post', 'slide');
          // get_template_part('partials/post', 'products');
        ?>
      </div>
    </div>
  </div>    
<?php
  get_footer();
?>