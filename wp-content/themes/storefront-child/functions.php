<?php
/**
** activation theme
**/
function theme_enqueue_styles() {

 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
** overriden woocommerce template
**/

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/**
** Fonction sauvegarde du panier
**/
function wdm_save_cart_details()
{
  global $woocommerce;

  // get user details
  global $current_user;
  get_currentuserinfo();

  if (is_user_logged_in())
  {
    $user_id = $current_user->ID;
    $cart_contents = $woocommerce->cart->get_cart();
    $meta_key = 'cart-'.date('l dS F');
    $meta_value = $cart_contents;
    update_user_meta( $user_id, $meta_key, $meta_value);
  }
  
}

add_action('save_cart', 'wdm_save_cart_details');


?>