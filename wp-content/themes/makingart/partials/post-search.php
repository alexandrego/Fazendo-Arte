<div class="py-3 div-product-search" id="loader">
	<a href="<?php the_permalink(); ?>">
		<div class="product-search">
			<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="product-search-image"/> <!-- width="180" style="margin-bottom:15px;" -->
			</br>
			<span class="product-search-price"><?php global $product; echo $product->get_price_html(); ?></span>
			</br>
			<p class="search-title"><?php
				echo the_title();
			?></p>
		</div>
	</a>
</div>