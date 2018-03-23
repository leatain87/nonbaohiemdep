<?php
// Add custom Theme Functions here
function view_info_woo() { ?>
<div style="border-top: 1px  dashed #ddd;height: 20px"></div>
<?php

}
add_action('woocommerce_single_product_summary','view_info_woo',12);

remove_action('woocommerce_single_product_summary','woocommerce_temlpate_single_price',10);	
remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);	
add_action('woocommerce_single_product_summary','woocommerce_template_single_price',25);	