<div class="py-3 div-product-search" id="loader">
	<a href="<?php the_permalink(); ?>" onclick="goHomeEffect()">
		<div class="divIndividualProduct">
			<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="product-search-image"/>
			
			<div class="divIndividualProductTitle">
				<p class="IndividualProductTitle">
					<?php
						// echo the_title();
						$product_title = the_title();
						
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
				<span style="font-size:16px;color:green;">
					<?php
						global $product;
						echo $product->get_price_html();
					?>
				</span>
			</div>
		</div>
	</a>
</div>