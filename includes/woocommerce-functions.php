<?

/**
 * Add woocommerce
 */

add_action('after_setup_theme', 'writingor__add_woocommerce_support');

function writingor__add_woocommerce_support() {
    add_theme_support('woocommerce');
}

/**
 * Fix login, register,
 * add to cart problem
 */

add_filter('nonce_user_logged_out', 'writingor__return_user_0', 100, 2);

function writingor__return_user_0($uid, $action) {

    if ($uid && $uid != 0 && $action && $action === 'caldera_forms_front') {
       $uid = 0;
    }
  
    return $uid;
}