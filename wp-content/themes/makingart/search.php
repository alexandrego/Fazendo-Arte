<?php
  get_header();
  get_template_part('partials/post', 'header');
?>
  <div class="container col-lg-10" id="container">
    
    <header class="page-header">
      <h1 class="page-title">
        Exibindo resultados para:</br>
          <small>
            <?php
             $busca = get_search_query();
             if(empty($busca)) {
              echo "Loja \n";
             } else {
              echo $busca ."\n";
             }
            ?>
          </small>
      </h1>
    </header>

    <div class="row">
      <div class="col-sm-12">
        <div class="product-search-container">
          <?php
            if(have_posts()):
              while(have_posts()) :
                the_post();
                
                get_template_part('partials/post', 'search');
                
              endwhile;
          ?>
        </div>
          <div class="div-pagination-search-page" onclick="goHomeEffect()">
            <?php
             the_posts_pagination( array( 'mid_size' => 2 ) );
            ?>
          </div>
            <?php
          else :
            ?>
              <p>Não encontramos <small><?php echo $busca; ?></small>, tente novamente!</p>
            <?php
          endif;
        ?>
      </div>
    </div>
  </div>
<?php
  get_footer();
?>