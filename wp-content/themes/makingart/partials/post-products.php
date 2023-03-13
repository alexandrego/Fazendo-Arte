<?php
  $args = array(
    'post_type'			 	=> 'product',
    'post_status' 		=> 'publish',
    'orderby'   			=> 'rand',
    'meta_query' 			=> array(
      array(
        'key' 				=> '_stock_status',
        'value' 			=> 'instock',
        'compare' 		=> '=',
      )
    ),
    'posts_per_page'	=> 10
  );

  $posts = get_posts($args);
?>
					
<div class="divProductLoop">
  <div class="divContainerProduct">
    <?php
      foreach($posts as $product){
          $product_title = $product->post_title;
          $product_price = get_post_meta($product->ID, '_regular_price', true);
          $product_img = get_the_post_thumbnail_url($product->ID, 'medium');
          $product_link = get_permalink($product->ID);
        ?>
          <a href="<?php echo $product_link; ?>">
            <div class="divIndividualProduct">
              <img src="<?php echo $product_img; ?>"/>

              <div class="divIndividualProductTitle">
                <p class="IndividualProductTitle">
                  <?php
                    // Se o texto for maior que 100, exibe até 100 caracteres
                    if(strlen($product_title) > 40){
                      echo ucwords(strtolower(substr($product_title, 0, 40))) . " ...";
                    }
                    // Senão exibi o texto completo
                    else{
                      echo ucwords(strtolower($product_title));
                    }
                  ?>
                </p>
              </div>

              <div class="divIndividualProductPrice">
                <p><?php 														
                  $dividendo = 5;
                  $limite_parcela = 6;
                  $limite_parcela = 12;

                  $quant_parcela = intdiv($product_price, $dividendo);

                  if($quant_parcela >= $limite_parcela){
                    $quant_parcela = $limite_parcela;  

                    $preco_pego = $product_price/$quant_parcela;

                  } else if($quant_parcela <= 1){
                    $quant_parcela = 1;

                    $preco_pego = $product_price*$quant_parcela;
                  } else {
                    $quant_parcela;

                    $preco_pego = $product_price/$quant_parcela;
                  }
                  
                echo '<span style="font-size:14px;color:green;">R$</span> <span style="font-size:20px;color:green;font-weight:600;">'.number_format($product_price, 2, ",", ".");
                ?></p>
              </div>
              <?php
              // if(current_user_can('administrator')){
              ?>
              <!-- <div style="font-size:12px;display: flex;align-items: center;height: 0px;">
                <div style="width: 17%; margin: 0 10px 0 0;">
                  <img src="../../wp-content/themes/trusted-child/img/truck-1.svg" />
                </div>
                <div>Envio Imediato</div>														
              </div> -->
              
              <!-- <div style="font-size:12px;display: flex;align-items: center;height: 55px;">
                <div style="width: 12%;margin: 0 10px 0 5px;">
                    <img src="../../wp-content/themes/trusted-child/img/cred-card.svg" />
                  </div>
                  <div>Em at&eacute; 6x sem juros</div>
              </div> -->
            </div>
          </a>
        <?php
      }
    ?>								
  </div>
</div>