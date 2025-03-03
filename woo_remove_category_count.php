<?php
// Remove the category count for WooCommerce categories
//added
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_filter( 'woocommerce_get_price_html', 'remove_price');