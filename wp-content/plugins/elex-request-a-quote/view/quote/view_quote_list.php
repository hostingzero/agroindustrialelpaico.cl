<div class="elex-rqst-quote-front-wrap" style="width:100%">
	<div class="w-100 <?php ( is_shop() && ( 'Twenty Twenty-Three' === $product_data['theme'] ) || ( 'Twenty Twenty-Two' === $product_data['theme'] ) ) ?  esc_html_e('text-center'): ''; ?>">
		
		<a href="<?php echo esc_url( $page_url ); ?>" ><button  data-product-id="<?php echo esc_attr( $product_data['id'] ); ?>"  id="<?php echo esc_attr( $product_data['id'] ); ?>" style="<?php echo  esc_attr( $product_data['button_color'] ); ?>" class="button wp-element-button text-white  btn-sm btn-primary my-2 rounded-2 position-relative opacity-100 elex-raq-view-quote-list-open-btn"><?php echo esc_html_e( 'View Quote List', 'elex-request-a-quote' ); ?></button></a>
	</div>
</div>
